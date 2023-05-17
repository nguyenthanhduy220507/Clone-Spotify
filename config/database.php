<?php

class Database
{
    private $conn;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "music_streaming";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        //utf8
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
