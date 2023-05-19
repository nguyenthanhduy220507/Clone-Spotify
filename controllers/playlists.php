<?php
require_once "./config/controller.php";
require_once "./models/Playlist.php";
require_once "./models/SongPlaylist.php";
class Playlists extends Controller
{
    public function playlist($id)
    {
        $DB = $this->model("PlaylistModel");
        $current_playlist = $DB->getByID($id);
        $DB_songplaylist = $this->model("SongPlaylistModel");
        $list_songplaylist = [];
        $DB_album = $this->model('AlbumModel');
        $list_album = [];
        foreach ($DB_songplaylist->getAll() as $songplaylist) {
            if ($songplaylist->getPlaylist()->getPlaylistId() == $current_playlist->getPlaylistId()) {
                $list_songplaylist[] = $songplaylist;
            }
        }
        $this->view('playlists/playlist', [
            'id' => $id,
            'playlist' => $current_playlist,
            'songplaylists' => $list_songplaylist,
            'songplaylists_num' => count($list_songplaylist),
            'album' => $list_album
        ]);
    }

    public function new_playlist() {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $playlistDB = $this->model('PlaylistModel');
        $name = 'new playlist';
        $description = 'playlist description';
        $image = 'https://www.dropbox.com/scl/fo/fj4zbvtfjaz38d1a6laxh/h/default_playlist.png?dl=1';
        $playlist = new Playlist(0, $name, $description, $user, $image);
        $playlistDB->create($playlist);
        $list = $playlistDB->getAll();
        $playlist = end($list);
        header('Location: ?url=playlists/playlist/'.$playlist->getPlaylistId());
    }

    public function add_song_to_playlist($song_id, $playlist_id) {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $song_playlistDB = $this->model('SongPlaylistModel');
        $playlist = $this->model('PlaylistModel')->getById($playlist_id);
        $song = $this->model('SongModel')->getByID($song_id);
        $order = count($song_playlistDB->getAll());
        $song_playlist = new SongPlaylist($song, $playlist, $order);
        $song_playlistDB->addSongToPlaylist($song_playlist);
        header('Location: ?url=playlists/playlist/'.$playlist_id);
    }

    public function clear_all($id) {
        $DB = $this->model('SongPlaylistModel');
        $DB->clearPlaylist($id);
        header('Location: ?url=playlists/playlist/'.$id);
    }

    public function playlist_login($id)
    {
        $userDB = $this->model("UserModel");
        $songDB = $this->model("SongModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $current_song = $songDB->getById($_SESSION['current_song']);

        $DB = $this->model("PlaylistModel");
        $current_playlist = $DB->getByID($id);
        $DB_songplaylist = $this->model("SongPlaylistModel");
        $list_songplaylist = [];
        $list_album = [];
        foreach ($DB_songplaylist->getAll() as $songplaylist) {
            if ($songplaylist->getPlaylist()->getPlaylistId() == $current_playlist->getPlaylistId()) {
                $list_songplaylist[] = $songplaylist;
            }
        }
        $can_edit = false;
        if ($current_playlist->getPlaylistUser()->getUserId() == $user->getUserId()) {
            $can_edit = true;
        }

        $this->view('playlists/playlist_login', [
            'id' => $id,
            'playlist' => $current_playlist,
            'songplaylists' => $list_songplaylist,
            'songplaylists_num' => count($list_songplaylist),
            'album' => $list_album,
            'user'=>$user,
            'song'=>$current_song,
            'can_edit'=>$can_edit,
        ]);
    }
}
