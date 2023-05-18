<?php
require_once "./config/controller.php";
class Home extends Controller
{
    public function index()
    {
        $DB = $this->model("PlaylistModel");
        $this->view('home/index', [
            'playlists' => $DB->getAll(),
        ]);
    }
    

    public function index_login()
    {
        $userDB = $this->model("UserModel");
        $songDB = $this->model("SongModel");
        $albumDB = $this->model("AlbumModel");
        $DB = $this->model("PlaylistModel");
        $playlist_sugs = [];
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $song = $songDB->getById($_SESSION['current_song']);
        $current_user_playlist = [];
        foreach ($DB->getAll() as $playlist) {
            if ($playlist->getPlaylistUser()->getType() == 'admin') {
                $playlist_sugs[] = $playlist;
            }
            else {
                if ($playlist->getPlaylistUser()->getUserId() == $user->getUserId()) {
                    $current_user_playlist[] = $playlist;
                }
            }
        }
        $this->view('home/index_login', [
            'current_user_playlist' => $current_user_playlist,
            'playlist_sugs'=>$playlist_sugs,
            'albums'=>$albumDB->getAll(),
            'user'=>$user,
            'song'=>$song
        ]);
    }
}