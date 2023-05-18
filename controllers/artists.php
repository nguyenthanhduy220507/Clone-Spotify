<?php
require_once "./config/controller.php";
class Artists extends Controller
{
    public function artst_login($id)
    {
        $DB = $this->model('ArtistModel');
        $current_artist = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        $list_album = [];
        //song
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongAlbum()->getAlbumId() == $current_artist->getAlbumId()) {
                $list_song[] = $song;
            }
        }
        //album
        foreach ($DB->getALL() as $album) {
            if($album->getAlbumArtist()->getArtistId() == $current_artist->getAlbumArtist()->getArtistId() && $album->getAlbumId() != $current_artist->getAlbumId()) {
                $list_album[] = $album;
            }
        }

        $this->view('albums/album-login', [
            'id' => $id,
            'album'=>$current_artist,
            'albums'=>$list_album,
            'song_num'=>count($list_song),
            'songs' =>$list_song
        ]);
    }
    public function artist($id)
    {
        $DB = $this->model('ArtistModel');
        $current_album = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        $list_album = [];
        //song
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongAlbum()->getAlbumId() == $current_album->getAlbumId()) {
                $list_song[] = $song;
            }
        }
        //album
        foreach ($DB->getALL() as $album) {
            if($album->getAlbumArtist()->getArtistId() == $current_album->getAlbumArtist()->getArtistId() && $album->getAlbumId() != $current_album->getAlbumId()) {
                $list_album[] = $album;
            }
        }

        $this->view('albums/album', [
            'id' => $id,
            'album'=>$current_album,
            'albums'=>$list_album,
            'song_num'=>count($list_song),
            'songs' =>$list_song
        ]);
    }
}