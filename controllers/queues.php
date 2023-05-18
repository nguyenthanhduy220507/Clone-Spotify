<?php
require_once "./config/controller.php";
class Queues extends Controller
{
    public function queue()
    {
        // $DB_artist = $this->model("ArtistModel");
        $DB_song = $this->model('SongModel');
        $this->view('queues/queue', [
            'songs'=>$DB_song->getAll(),
            // 'artists' =>$DB_artist->getAll()
        ]);
    }
}