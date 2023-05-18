<?php
require_once "./config/controller.php";
class Playlists extends Controller
{


    

    public function playlist($id)
    {
       
        $DB = $this->model('PlaylistModel');
        $current_playlist= $DB->getByID($id);
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
    }

    public function playlist_login($id)
    {
        
        $DB = $this->model("PlaylistModel");
        $this->view('playlists/playlist_login', [
            'playlist' => $DB->getByID($id)
        ]);
    }
}