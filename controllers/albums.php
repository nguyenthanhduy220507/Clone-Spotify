<?php
require_once "./config/controller.php";
class Albums extends Controller
{
    public function album_login($id)
    {
        $DB = $this->model('AlbumModel');
        $current_album = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongAlbum()->getAlbumId() == $current_album->getAlbumId()) {
                $list_song[] = $song;
            }
        }
        $this->view('client/album-login', [
            'album'=>$current_album,
            'song_num'=>count($list_song),
            'songs' =>$list_song
        ]);
    }
}