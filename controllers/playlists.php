<?php
require_once "./config/controller.php";
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

        $this->view('playlists/playlist_login', [
            'id' => $id,
            'playlist' => $current_playlist,
            'songplaylists' => $list_songplaylist,
            'songplaylists_num' => count($list_songplaylist),
            'album' => $list_album,
            'user'=>$user,
            'song'=>$current_song
        ]);
    }
}
