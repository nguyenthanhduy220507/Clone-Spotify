<?php
require_once "./config/database.php";
require_once "./models/SongPlaylist.php";
require_once "./models/SongModel.php";
require_once "./models/PlaylistModel.php";

class SongPlaylistModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function addSongToPlaylist(SongPlaylist $songPlaylist)
    {
        $query = "INSERT INTO song_playlist (song_id, playlist_id, song_order) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $song_id = $songPlaylist->getSong()->getSongId();
        $playlist_id = $songPlaylist->getPlaylist()->getPlaylistId();
        $song_order = $songPlaylist->getSongOrder();
        $stmt->bind_param('iii', $song_id, $playlist_id, $song_order);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function updateSongOrder($song_id, $playlist_id, $new_song_order)
    {
        $query = "UPDATE song_playlist SET song_order = ? WHERE song_id = ? AND playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iii', $new_song_order, $song_id, $playlist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function removeSongFromPlaylist($song_id, $playlist_id)
    {
        $query = "DELETE FROM song_playlist WHERE song_id = ? AND playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $song_id, $playlist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getPlaylistSongs($playlist_id)
    {
        $song_model = new SongModel();
        $query = "SELECT sp.song_id FROM song_playlist sp INNER JOIN songs s ON sp.song_id = s.song_id WHERE sp.playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $playlist_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $songs = [];
        while ($row = $result->fetch_assoc()) {
            $song_id = $row['song_id'];
            $all_songs = $song_model->getAll();
            foreach ($all_songs as $song) {
                if ($song->getSongId() == $song_id) {
                    $songs[] = $song;
                }
            }
        }
        return $songs;
    }

    public function getAll() {
        $song_model = new SongModel();
        $playlist_model = new PlaylistModel();
        $query = "SELECT * FROM song_playlist";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $song_playlists = [];
        while ($row = $result->fetch_assoc()) {
            $song_id = $row['song_id'];
            $playlist_id = $row['playlist_id'];
            $song_order = $row['song_order'];
            $song = $song_model->getById($song_id);
            $playlist = $playlist_model->getById($playlist_id);
            $song_playlist = new SongPlaylist($song, $playlist, $song_order);
            $song_playlists[] = $song_playlist;
        }
        return $song_playlists;
    }

    public function clearPlaylist($playlist_id)
    {
        $query = "DELETE FROM song_playlist WHERE playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $playlist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }
}
