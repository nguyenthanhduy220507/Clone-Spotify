<?php
require_once "./config/controller.php";
class Collections extends Controller
{
    public function collection_like_song()
    {
        $this->view('collections/collection-like-song', [

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

        ]);
    }
    public function collection_album()
    {
        $this->view('collections/collection-album', [

        ]);
    }
}