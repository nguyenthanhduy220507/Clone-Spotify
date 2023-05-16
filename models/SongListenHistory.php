<?php

class SongListenHistory
{
    private $listen_id;
    private $user;
    private $song;
    private $listen_date;

    public function __construct($listen_id, $user, $song, $listen_date)
    {
        $this->listen_id = $listen_id;
        $this->user = $user;
        $this->song = $song;
        $this->listen_date = $listen_date;
    }

    public function getListenId()
    {
        return $this->listen_id;
    }

    public function setListenId($listen_id)
    {
        $this->listen_id = $listen_id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getSong()
    {
        return $this->song;
    }

    public function setSong($song)
    {
        $this->song = $song;
    }

    public function getListenDate()
    {
        return $this->listen_date;
    }

    public function setListenDate($listen_date)
    {
        $this->listen_date = $listen_date;
    }
}
