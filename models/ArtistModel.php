<?php
require_once "./config/database.php";
require_once "./models/Artist.php";

class ArtistModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function create(Artist $artist)
    {
        $query = "INSERT INTO artists (artist_name, artist_description, artist_image_url)
          VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $artist_name = $artist->getArtistName();
        $artist_description = $artist->getArtistDescription();
        $artist_image_url = $artist->getArtistImageUrl();
        $stmt->bind_param('sss', $artist_name, $artist_description, $artist_image_url);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function update(Artist $artist)
    {
        $query = "UPDATE artists SET artist_name = ?, artist_description = ?, artist_image_url = ? WHERE artist_id = ?";
        $stmt = $this->db->prepare($query);
        $artist_name = $artist->getArtistName();
        $artist_description = $artist->getArtistDescription();
        $artist_image_url = $artist->getArtistImageUrl();
        $artist_id = $artist->getArtistId();
        $stmt->bind_param('sssi', $artist_name, $artist_description, $artist_image_url, $artist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function delete($artist_id)
    {
        $query = "DELETE FROM artists WHERE artist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $artist_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getById($artist_id)
    {
        $query = "SELECT * FROM artists WHERE artist_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $artist_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row) {
            $artist_id_new = $row['artist_id'];
            $artist_name = $row['artist_name'];
            $artist_description = $row['artist_description'];
            $artist_image_url = $row['artist_image_url'];
            return new Artist(
                $artist_id_new,
                $artist_name,
                $artist_description,
                $artist_image_url
            );
        }
        return null;
    }

    public function getAll()
    {
        $query = "SELECT * FROM artists";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $artists = [];
        while ($row = $result->fetch_assoc()) {
            $artist_id_new = $row['artist_id'];
            $artist_name = $row['artist_name'];
            $artist_description = $row['artist_description'];
            $artist_image_url = $row['artist_image_url'];
            $artist = new Artist(
                $artist_id_new,
                $artist_name,
                $artist_description,
                $artist_image_url
            );
            $artists[] = $artist;
        }
        $stmt->close();
        return $artists;
    }

    public function search($search_string)
    {
        $query = "SELECT * FROM artists WHERE artist_name LIKE ?";
        $stmt = $this->db->prepare($query);
        $search_term = "%" . $search_string . "%";
        $stmt->bind_param('s', $search_term);
        $stmt->execute();
        $result = $stmt->get_result();
        $artists = [];
        while ($row = $result->fetch_assoc()) {
            $artist_id_new = $row['artist_id'];
            $artist_name = $row['artist_name'];
            $artist_description = $row['artist_description'];
            $artist_image_url = $row['artist_image_url'];
            $artist = new Artist(
                $artist_id_new,
                $artist_name,
                $artist_description,
                $artist_image_url
            );
            $artists[] = $artist;
        }
        $stmt->close();
        return $artists;
    }
}
