<?php

class Album
{
    private $album_id;
    private $album_title;
    private $album_artist;
    private $album_release_date;
    private $album_image_url;

    public function __construct($album_id, $album_title, $album_artist, $album_release_date, $album_image_url)
    {
        $this->album_id = $album_id;
        $this->album_title = $album_title;
        $this->album_artist = $album_artist;
        $this->album_release_date = $album_release_date;
        $this->album_image_url = $album_image_url;
    }

    public function getAlbumId()
    {
        return $this->album_id;
    }

    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;
    }

    public function getAlbumTitle()
    {
        return $this->album_title;
    }

    public function setAlbumTitle($album_title)
    {
        $this->album_title = $album_title;
    }

    public function getAlbumArtist()
    {
        return $this->album_artist;
    }

    public function setAlbumArtist($album_artist)
    {
        $this->album_artist = $album_artist;
    }

    public function getAlbumReleaseDate()
    {
        return $this->album_release_date;
    }

    public function setAlbumReleaseDate($album_release_date)
    {
        $this->album_release_date = $album_release_date;
    }

    public function getAlbumImageUrl()
    {
        return $this->album_image_url;
    }

    public function setAlbumImageUrl($album_image_url)
    {
        $this->album_image_url = $album_image_url;
    }
}
