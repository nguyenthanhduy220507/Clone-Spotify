<?php
require_once "./config/database.php";
require_once "./models/Song.php";
require_once "./models/ArtistModel.php";
require_once "./models/AlbumModel.php";

class SongModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function create(Song $song)
    {
        $query = "INSERT INTO songs (song_title, song_artist_id, song_album_id, song_image_url, song_url, song_duration)
          VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $song_title = $song->getSongTitle();
        $song_artist_id = $song->getSongArtist()->getArtistId();
        $song_album_id = $song->getSongAlbum()->getAlbumId();
        $song_image_url = $song->getSongImageUrl();
        $song_url = $song->getSongUrl();
        $song_duration = $song->getSongDuration();
        $stmt->bind_param('siissi', $song_title, $song_artist_id, $song_album_id, $song_image_url, $song_url, $song_duration);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function update(Song $song)
    {
        $query = "UPDATE songs SET song_title = ?, song_artist_id = ?, song_album_id = ?, song_image_url = ?, song_url = ?, song_duration = ? WHERE song_id = ?";
        $stmt = $this->db->prepare($query);
        $song_title = $song->getSongTitle();
        $song_artist_id = $song->getSongArtist()->getArtistId();
        $song_album_id = $song->getSongAlbum()->getAlbumId();
        $song_image_url = $song->getSongImageUrl();
        $song_url = $song->getSongUrl();
        $song_duration = $song->getSongDuration();
        $song_id = $song->getSongId();
        $stmt->bind_param('siissii', $song_title, $song_artist_id, $song_album_id, $song_image_url, $song_url, $song_duration, $song_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function delete($song_id)
    {
        $query = "DELETE FROM songs WHERE song_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $song_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getById($song_id)
    {
        $query = "SELECT * FROM songs WHERE song_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $song_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row) {
            $artist_model = new ArtistModel();
            $album_model = new AlbumModel();
            $song_id_new = $row['song_id'];
            $song_title = $row['song_title'];
            $song_artist_id = $row['song_artist_id'];
            $song_album_id = $row['song_album_id'];
            $song_image_url = $row['song_image_url'];
            $song_url = $row['song_url'];
            $song_duration = $row['song_duration'];
            $song_artist = $artist_model->getById($song_artist_id);
            $song_album = $album_model->getById($song_album_id);
            return new Song(
                $song_id_new,
                $song_title,
                $song_artist,
                $song_album,
                $song_image_url,
                $song_url,
                $song_duration
            );
        }
        return null;
    }

    public function getAll()
    {
        $artist_model = new ArtistModel();
        $album_model = new AlbumModel();
        $query = "SELECT * FROM songs";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $songs = [];
        while ($row = $result->fetch_assoc()) {
            $song_id_new = $row['song_id'];
            $song_title = $row['song_title'];
            $song_artist_id = $row['song_artist_id'];
            $song_album_id = $row['song_album_id'];
            $song_image_url = $row['song_image_url'];
            $song_url = $row['song_url'];
            $song_duration = $row['song_duration'];
            $song_artist = $artist_model->getById($song_artist_id);
            $song_album = $album_model->getById($song_album_id);
            $song = new Song(
                $song_id_new,
                $song_title,
                $song_artist,
                $song_album,
                $song_image_url,
                $song_url,
                $song_duration
            );
            $songs[] = $song;
        }
        $stmt->close();
        return $songs;
    }

    public function search($search_string)
    {
        $artist_model = new ArtistModel();
        $album_model = new AlbumModel();
        $query = "SELECT * FROM songs WHERE song_title LIKE ?";
        $stmt = $this->db->prepare($query);
        $search_term = "%" . $search_string . "%";
        $stmt->bind_param('s', $search_term);
        $stmt->execute();
        $result = $stmt->get_result();
        $songs = [];
        while ($row = $result->fetch_assoc()) {
            $song_id_new = $row['song_id'];
            $song_title = $row['song_title'];
            $song_artist_id = $row['song_artist_id'];
            $song_album_id = $row['song_album_id'];
            $song_image_url = $row['song_image_url'];
            $song_url = $row['song_url'];
            $song_duration = $row['song_duration'];
            $song_artist = $artist_model->getById($song_artist_id);
            $song_album = $album_model->getById($song_album_id);
            $song = new Song(
                $song_id_new,
                $song_title,
                $song_artist,
                $song_album,
                $song_image_url,
                $song_url,
                $song_duration
            );
            $songs[] = $song;
        }
        $stmt->close();
        return $songs;
    }
}
