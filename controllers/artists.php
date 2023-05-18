<?php
require_once "./config/controller.php";
class Artists extends Controller
{
    public function artist($id)
    {
       
        
        $DB = $this->model("ArtistModel");
        $current_artist = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        $DB_album = $this->model('AlbumModel');
        $list_album = [];
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_song[] = $song;
            }
        }
        foreach ($DB_album->getALL() as $album) {
            if ($album->getAlbumArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_album[] = $album;
            }
        }
        $this->view('artists/artist', [
            'artist' => $DB->getByID($id),
            // 'artist'=>$current_artist,
            'song_num'=>count($list_song),
            'songs' =>$list_song,
            'albums' =>$list_album

        ]);
    }
    

    public function artist_login($id)
    {
        
        $DB = $this->model("ArtistModel");
        $current_artist = $DB->getByID($id);
        $DB_song = $this->model('SongModel');
        $list_song = [];
        
        foreach ($DB_song->getALL() as $song) {
            if ($song->getSongArtist()->getArtistId() == $current_artist->getArtistId()) {
                $list_song[] = $song;
            }
        }
       
        $this->view('artists/artist_login', [
            'artist' => $DB->getByID($id),
            // 'artist'=>$current_artist,
            'song_num'=>count($list_song),
            'songs' =>$list_song
            
        ]);
    }
}