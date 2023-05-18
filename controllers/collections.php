<?php
require_once "./config/controller.php";
class Collections extends Controller
{
    private $DB_song;
    private $DB_user;
    private $DB_artist;
    private $DB_album;

    public function __construct()
    {
        $this->DB_song = $this->model('SongModel');
        $this->DB_user = $this->model('UserModel');
        $this->DB_artist = $this->model('ArtistModel');
        $this->DB_album = $this->model('AlbumModel');
    }
    public function collection_like_song()
    {
        $this->view('collections/collection-like-song', [
            'songs' => $this->DB_song->getAll(),
            'users' => $this->DB_user->getAll(),
        ]);
    }
    public function collection_playlist()
    {
        $this->view('collections/collection-playlist', [

        ]);
    }
    public function collection_episode()
    {
        $this->view('collections/collection-episode', [
            
        ]);
    }
    public function collection_artist()
    {
        $this->view('collections/collection-artist', [
            'artists' => $this->DB_artist->getAll(),
        ]);
    }
    public function collection_album()
    {
        $this->view('collections/collection-album', [
            'albums' => $this->DB_album->getAll(),
        ]);
    }
}