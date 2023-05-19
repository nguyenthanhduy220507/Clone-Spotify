<?php
require_once "./config/controller.php";
class Searchss extends Controller
{
    public function search()
    {
        $DB = $this->model("PlaylistModel");
        $DB_album = $this->model("AlbumModel");
        $DB_artist = $this->model("ArtistModel");
        $this->view('searchss/search', [
            'playlists' => $DB->getAll(),
            'albums' => $DB_album->getAll(),
            'artists' => $DB_artist->getAll(),
        ]);
    }

    public function search_results($search_string) {
        $userDB = $this->model("UserModel");
        $songDB = $this->model("SongModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $current_song = $songDB->getById($_SESSION['current_song']);

        $albumDB = $this->model("AlbumModel");
        $playlistDB = $this->model("PlaylistModel");
        $artistDB = $this->model("ArtistModel");
        $playlist_list = $playlistDB->search($search_string);
        $album_list = $albumDB->search($search_string);
        $artist_list = $artistDB->search($search_string);
        
        $this->view('searchss/search_login', [
            'artists' => $artist_list,
            'playlists'=>$playlist_list,
            'albums'=>$album_list,
            'user'=>$user,
            'song'=>$current_song
        ]);
    }

    public function search_login()
    {
        $userDB = $this->model("UserModel");
        $songDB = $this->model("SongModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $current_song = $songDB->getById($_SESSION['current_song']);
        $DB = $this->model("PlaylistModel");
        $DB_album = $this->model("AlbumModel");
        $DB_artist = $this->model("ArtistModel");
        $this->view('searchss/search_login', [
            'playlists' => $DB->getAll(),
            'albums' => $DB_album->getAll(),
            'artists' => $DB_artist->getAll(),
            'user'=>$user,
            'song'=>$current_song
        ]);
    }
}