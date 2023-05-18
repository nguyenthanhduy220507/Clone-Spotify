<?php
require_once "./config/database.php";
require_once "./models/Album.php";
require_once "./models/ArtistModel.php";

class AlbumModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function create(Album $album)
    {
        $query = "INSERT INTO albums (album_title, album_artist_id, album_release_date, album_image_url)
          VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $album_title = $album->getAlbumTitle();
        $album_artist_id = $album->getAlbumArtist()->getArtistId();
        $album_release_date = $album->getAlbumReleaseDate();
        $album_image_url = $album->getAlbumImageUrl();
        $stmt->bind_param('siss', $album_title, $album_artist_id, $album_release_date, $album_image_url);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function update(Album $album)
    {
        $query = "UPDATE albums SET album_title = ?, album_artist_id = ?, album_release_date = ?, album_image_url = ? WHERE album_id = ?";
        $stmt = $this->db->prepare($query);
        $album_title = $album->getAlbumTitle();
        $album_artist_id = $album->getAlbumArtist()->getArtistId();
        $album_release_date = $album->getAlbumReleaseDate();
        $album_image_url = $album->getAlbumImageUrl();
        $album_id = $album->getAlbumId();
        $stmt->bind_param('sissi', $album_title, $album_artist_id, $album_release_date, $album_image_url, $album_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function delete($album_id)
    {
        $query = "DELETE FROM albums WHERE album_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $album_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getById($album_id)
    {
        $query = "SELECT * FROM albums WHERE album_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $album_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row) {
            $album_id_new = $row['album_id'];
            $album_title = $row['album_title'];
            $album_artist_id = $row['album_artist_id'];
            $album_release_date = $row['album_release_date'];
            $album_image_url = $row['album_image_url'];
            $artist_model = new ArtistModel();
            $album_artist = $artist_model->getById($album_artist_id);
            return new Album(
                $album_id_new,
                $album_title,
                $album_artist,
                $album_release_date,
                $album_image_url
            );
        }
        return null;
    }

    public function getAll()
    {
        $artist_model = new ArtistModel();
        $query = "SELECT * FROM albums";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $albums = [];
        while ($row = $result->fetch_assoc()) {
            $album_id_new = $row['album_id'];
            $album_title = $row['album_title'];
            $album_artist_id = $row['album_artist_id'];
            $album_release_date = $row['album_release_date'];
            $album_image_url = $row['album_image_url'];
            $album_artist = $artist_model->getById($album_artist_id);
            $album = new Album(
                $album_id_new,
                $album_title,
                $album_artist,
                $album_release_date,
                $album_image_url
            );
            $albums[] = $album;
        }
        $stmt->close();
        return $albums;
    }

    public function search($search_string)
    {
        $artist_model = new ArtistModel();
        $query = "SELECT * FROM albums WHERE album_title LIKE ?";
        $stmt = $this->db->prepare($query);
        $search_term = "%" . $search_string . "%";
        $stmt->bind_param('s', $search_term);
        $stmt->execute();
        $result = $stmt->get_result();
        $albums = [];
        while ($row = $result->fetch_assoc()) {
            $album_id_new = $row['album_id'];
            $album_title = $row['album_title'];
            $album_artist_id = $row['album_artist_id'];
            $album_release_date = $row['album_release_date'];
            $album_image_url = $row['album_image_url'];
            $album_artist = $artist_model->getById($album_artist_id);
            $album = new Album(
                $album_id_new,
                $album_title,
                $album_artist,
                $album_release_date,
                $album_image_url
            );
            $albums[] = $album;
        }
        $stmt->close();
        return $albums;
    }
}
