<?php

class Artist
{
    private $artist_id;
    private $artist_name;
    private $artist_description;
    private $artist_image_url;

    public function __construct($artist_id, $artist_name, $artist_description, $artist_image_url)
    {
        $this->artist_id = $artist_id;
        $this->artist_name = $artist_name;
        $this->artist_description = $artist_description;
        $this->artist_image_url = $artist_image_url;
    }

    public function getArtistId()
    {
        return $this->artist_id;
    }

    public function setArtistId($artist_id)
    {
        $this->artist_id = $artist_id;
    }

    public function getArtistName()
    {
        return $this->artist_name;
    }

    public function setArtistName($artist_name)
    {
        $this->artist_name = $artist_name;
    }

    public function getArtistDescription()
    {
        return $this->artist_description;
    }

    public function setArtistDescription($artist_description)
    {
        $this->artist_description = $artist_description;
    }

    public function getArtistImageUrl()
    {
        return $this->artist_image_url;
    }

    public function setArtistImageUrl($artist_image_url)
    {
        $this->artist_image_url = $artist_image_url;
    }
}
