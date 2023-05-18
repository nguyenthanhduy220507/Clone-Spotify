<?php
require_once "./config/database.php";
require_once "./models/Playlist.php";
require_once "./models/UserModel.php";

class PlaylistModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function create(Playlist $playlist)
    {
        $query = "INSERT INTO playlists (playlist_name, playlist_description, playlists_user_id, playlists_image_url)
          VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $playlist_name = $playlist->getPlaylistName();
        $playlist_description = $playlist->getPlaylistDescription();
        $playlists_user_id = $playlist->getPlaylistUser()->getUserId();
        $playlists_image_url = $playlist->getPlaylistImageUrl();
        $stmt->bind_param('ssis', $playlist_name, $playlist_description, $playlists_user_id, $playlists_image_url);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function update(Playlist $playlist)
    {
        $query = "UPDATE playlists SET playlist_name = ?, playlist_description = ?, playlists_user_id = ?, playlists_image_url = ? WHERE playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $playlistName = $playlist->getPlaylistName();
        $playlist_description = $playlist->getPlaylistDescription();
        $playlists_user_id = $playlist->getPlaylistUser()->getUserId();
        $playlists_image_url = $playlist->getPlaylistImageUrl();
        $playlist_id = $playlist->getPlaylistId();
        $stmt->bind_param('ssisi', $playlistName, $playlist_description, $playlists_user_id, $playlists_image_url, $playlist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function delete($playlist_id)
    {
        $query = "DELETE FROM playlists WHERE playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $playlist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getById($playlist_id)
    {
        $query = "SELECT * FROM playlists WHERE playlist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $playlist_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row) {
            $playlist_id_new = $row['playlist_id'];
            $playlist_name = $row['playlist_name'];
            $playlist_description = $row['playlist_description'];
            $playlists_user_id = $row['playlists_user_id'];
            $playlists_image_url = $row['playlists_image_url'];
            $user_model = new UserModel();
            $playlists_user = $user_model->getById($playlists_user_id);
            return new Playlist(
                $playlist_id_new,
                $playlist_name,
                $playlist_description,
                $playlists_user,
                $playlists_image_url
            );
        }
        return null;
    }

    public function getAll()
    {
        $user_model = new UserModel();
        $query = "SELECT * FROM playlists";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $playlists = [];
        while ($row = $result->fetch_assoc()) {
            $playlist_id_new = $row['playlist_id'];
            $playlist_name = $row['playlist_name'];
            $playlist_description = $row['playlist_description'];
            $playlists_user_id = $row['playlists_user_id'];
            $playlists_image_url = $row['playlists_image_url'];
            $playlists_user = $user_model->getById($playlists_user_id);
            $playlist = new Playlist(
                $playlist_id_new,
                $playlist_name,
                $playlist_description,
                $playlists_user,
                $playlists_image_url
            );
            $playlists[] = $playlist;
        }
        $stmt->close();
        return $playlists;
    }

    public function search($search_string)
    {
        $user_model = new UserModel();
        $query = "SELECT * FROM playlists WHERE playlist_name LIKE ?";
        $stmt = $this->db->prepare($query);
        $search_term = "%" . $search_string . "%";
        $stmt->bind_param('s', $search_term);
        $stmt->execute();
        $result = $stmt->get_result();
        $playlists = [];
        while ($row = $result->fetch_assoc()) {
            $playlist_id_new = $row['playlist_id'];
            $playlist_name = $row['playlist_name'];
            $playlist_description = $row['playlist_description'];
            $playlists_user_id = $row['playlists_user_id'];
            $playlists_image_url = $row['playlists_image_url'];
            $playlists_user = $user_model->getById($playlists_user_id);
            $playlist = new Playlist(
                $playlist_id_new,
                $playlist_name,
                $playlist_description,
                $playlists_user,
                $playlists_image_url
            );
            $playlists[] = $playlist;
        }
        $stmt->close();
        return $playlists;
    }
}
