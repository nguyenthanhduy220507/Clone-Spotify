<?php

class Song
{
    private $song_id;
    private $song_title;
    private $song_artist;
    private $song_album;
    private $song_image_url;
    private $song_url;
    private $song_duration;
    
    public function __construct($song_id, $song_title, $song_artist, $song_album, $song_image_url, $song_url, $song_duration)
    {
        $this->song_id = $song_id;
        $this->song_title = $song_title;
        $this->song_artist = $song_artist;
        $this->song_album = $song_album;
        $this->song_image_url = $song_image_url;
        $this->song_url = $song_url;
        $this->song_duration = $song_duration;
    }
    
    public function getSongId()
    {
        return $this->song_id;
    }

    public function setSongId($song_id)
    {
        $this->song_id = $song_id;
    }

    public function getSongTitle()
    {
        return $this->song_title;
    }

    public function setSongTitle($song_title)
    {
        $this->song_title = $song_title;
    }

    public function getSongArtist()
    {
        return $this->song_artist;
    }

    public function setSongArtist($song_artist)
    {
        $this->song_artist = $song_artist;
    }

    public function getSongAlbum()
    {
        return $this->song_album;
    }

    public function setSongAlbum($song_album)
    {
        $this->song_album = $song_album;
    }

    public function getSongImageUrl()
    {
        return $this->song_image_url;
    }

    public function setSongImageUrl($song_image_url)
    {
        $this->song_image_url = $song_image_url;
    }

    public function getSongUrl()
    {
        return $this->song_url;
    }

    public function setSongUrl($song_url)
    {
        $this->song_url = $song_url;
    }

    public function getSongDuration()
    {
        return $this->song_duration;
    }

    public function setSongDuration($song_duration)
    {
        $this->song_duration = $song_duration;
    }
}
