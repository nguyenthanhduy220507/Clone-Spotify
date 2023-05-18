<?php
require_once "./config/controller.php";
class Playlists extends Controller
{
    public function playlist()
    {
    
        // $DB = $this->model("PlaylistModel");
        // $current_playlist= $DB->getByID($id);
        // $DB_songplaylist = $this->model("SongPlaylistModel");
        // $list_songplaylist = [];
        // foreach ($DB_songplaylist->getPlaylistSongs() as $songplaylist) {
        //     if ($songplaylist->getPlaylist()->getPlaylistId()== $current_playlist->getPlaylistId() ) {
        //         $list_songplaylist[] = $songplaylist;
        //     }
        // }
        $this->view('playlists/playlist', [
            // 'id' => $id,
            // 'playlist'=>$current_playlist

        ]);
    }
    

    public function playlist_login()
    {
       
        $DB = $this->model("PlaylistModel");
        $this->view('playlists/playlist_login', [
            
        ]);
    }
}