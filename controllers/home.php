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
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $current_song = $songDB->getById($_SESSION['current_song']);

        $albumDB = $this->model("AlbumModel");
        $DB = $this->model("PlaylistModel");
        $playlist_sugs = [];
        $current_user_playlist = [];
        foreach ($DB->getAll() as $playlist) {
            if ($playlist->getPlaylistUser()->getType() == 'admin') {
                $playlist_sugs[] = $playlist;
            } else {
                if ($playlist->getPlaylistUser()->getUserId() == $user->getUserId()) {
                    $current_user_playlist[] = $playlist;
                }
            }
        }
        $this->view('home/index_login', [
            'current_user_playlist' => $current_user_playlist,
            'playlist_sugs' => $playlist_sugs,
            'albums' => $albumDB->getAll(),
            'user' => $user,
            'song' => $current_song
        ]);
    }

    public function play_music()
    {
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
        ) {
            $value = $_POST['value'];
            $_SESSION['current_song'] = $value;
            $success = true;
            // return JSON response
            header('Content-Type: application/json');
            echo json_encode(array('success' => $success));
        }
    }
}
