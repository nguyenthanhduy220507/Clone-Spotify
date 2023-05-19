<?php
require_once "./config/controller.php";
class Artists extends Controller
{
    public function artist_login($id)
    {
        $userDB = $this->model("UserModel");
        $songDB = $this->model("SongModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $current_song = $songDB->getById($_SESSION['current_song']);

        $DB = $this->model('ArtistModel');
        $playlistDB = $this->model('PlaylistModel');
        $current_artist = $DB->getByID($id);
        $list_song = [];
        $DB_album = $this->model('AlbumModel');
        $list_album = [];
        $list_playlist = [];
        $list_song_from_playlist = [];
        //song
        foreach ($songDB->getALL() as $song) {
            if ($song->getSongArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_song[] = $song;
            }
        }
        //album
        foreach ($DB_album->getALL() as $album) {
            if ($album->getAlbumArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_album[] = $album;
            }
        }
        // playlist
        foreach ($playlistDB->getAll() as $playlist) {
            if ($playlist->getPlaylistUser()->getUserId() == $user->getUserId()) {
                $list_playlist[] = $playlist;
                $list_song_from_playlist[] = $this->model('SongPlaylistModel')->getPlaylistSongs($playlist->getPlaylistId());
            }
        }

        $this->view('artists/artist_login', [
            'id' => $id,
            'artist' => $current_artist,
            'albums' => $list_album,
            'song_num' => count($list_song),
            'songs' => $list_song,
            'user'=>$user,
            'song'=>$current_song,
            'playlists'=>$list_playlist,
            'list_song_playlist'=>$list_song_from_playlist
        ]);
    }
    public function artist($id)
    {
        $DB = $this->model('ArtistModel');
        $current_artist = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        $DB_album = $this->model('AlbumModel');
        $list_album = [];
        //song
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_song[] = $song;
            }
        }
        //album
        foreach ($DB_album->getALL() as $album) {
            if ($album->getAlbumArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_album[] = $album;
            }
        }

        $this->view('artists/artist', [
            'id' => $id,
            'artist' => $current_artist,
            'albums' => $list_album,
            'song_num' => count($list_song),
            'songs' => $list_song
        ]);
    }
}
