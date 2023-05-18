<?php
require_once "./config/controller.php";
class Playlists extends Controller
{


    

    public function playlist($id)
    {
       
        $DB = $this->model("PlaylistModel");
        $this->view('playlists/playlist', [
            'playlist' => $DB->getByID($id)

        ]);
    }

    public function playlist_login($id)
    {
        
        $DB = $this->model("PlaylistModel");
        $this->view('playlists/playlist_login', [
            'playlist' => $DB->getByID($id)
        ]);
    }
}