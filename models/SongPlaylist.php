<?php

class SongPlaylist
{
    private $song;
    private $playlist;
    private $song_order;

    public function __construct($song, $playlist, $song_order)
    {
        $this->song = $song;
        $this->playlist = $playlist;
        $this->song_order = $song_order;
    }

    public function getSong()
    {
        return $this->song;
    }

    public function setSong($song)
    {
        $this->song = $song;
    }

    public function getPlaylist()
    {
        return $this->playlist;
    }

    public function setPlaylist($playlist)
    {
        $this->playlist = $playlist;
    }

    public function getSongOrder()
    {
        return $this->song_order;
    }

    public function setSongOrder($song_order)
    {
        $this->song_order = $song_order;
    }
}
