<?php
require_once "./config/controller.php";
class Playlists extends Controller
{
    public function playlist($id)
    {
    
        $DB = $this->model("PlaylistModel");
        $current_playlist= $DB->getByID($id);
        $DB_songplaylist = $this->model("SongPlaylistModel");
        $list_songplaylist = [];
        $DB_album = $this->model('AlbumModel');
        $list_album = [];
        foreach ($DB_songplaylist->getAll() as $songplaylist) {
            if ($songplaylist->getPlaylist()->getPlaylistId()== $current_playlist->getPlaylistId() ) {
                $list_songplaylist[] = $songplaylist;
            }
        }
        // foreach ($DB_songplaylist->getAll() as $songplaylist) {
        //     foreach ($DB_album->getAll() as $album) {
        //         if ($album->getAlbumId()== $songplaylist->getSong()->getSongAlbum()->getAlbumId() ) {
        //             $list_album[] = $album;
        //         }
        //     }
        // }
        $this->view('playlists/playlist', [
            'id' => $id,
            'playlist'=>$current_playlist,
            'songplaylists' => $list_songplaylist,
            'songplaylists_num' =>count($list_songplaylist),
            'album' =>$list_album
        ]);
    }
    

    public function playlist_login($id)
    {
       
        $DB = $this->model("PlaylistModel");
        $current_playlist= $DB->getByID($id);
        $this->view('playlists/playlist_login', [
            'id' => $id,
            'playlist'=>$current_playlist
        ]);
    }
}