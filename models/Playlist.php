<?php

class Playlist
{
    private $playlist_id;
    private $playlist_name;
    private $playlist_description;
    private $playlist_user;
    private $playlist_image_url;

    public function __construct($playlist_id, $playlist_name, $playlist_description, $playlist_user, $playlist_image_url)
    {
        $this->playlist_id = $playlist_id;
        $this->playlist_name = $playlist_name;
        $this->playlist_description = $playlist_description;
        $this->playlist_user = $playlist_user;
        $this->playlist_image_url = $playlist_image_url;
    }

    public function getPlaylistId()
    {
        return $this->playlist_id;
    }

    public function setPlaylistId($playlist_id)
    {
        $this->playlist_id = $playlist_id;
    }

    public function getPlaylistName()
    {
        return $this->playlist_name;
    }

    public function setPlaylistName($playlist_name)
    {
        $this->playlist_name = $playlist_name;
    }

    public function getPlaylistDescription()
    {
        return $this->playlist_description;
    }

    public function setPlaylistDescription($playlist_description)
    {
        $this->playlist_description = $playlist_description;
    }

    public function getPlaylistUser()
    {
        return $this->playlist_user;
    }

    public function setPlaylistUser($playlist_user)
    {
        $this->playlist_user = $playlist_user;
    }

    public function getPlaylistImageUrl()
    {
        return $this->playlist_image_url;
    }

    public function setPlaylistImageUrl($playlist_image_url)
    {
        $this->playlist_image_url = $playlist_image_url;
    }
}
