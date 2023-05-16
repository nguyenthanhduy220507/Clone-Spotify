<?php

class User
{
    private $user_id;
    private $username;
    private $password;
    private $email;
    private $day_of_birth;
    private $gender;
    private $type;

    public function __construct($user_id, $username, $password, $email, $day_of_birth, $gender, $type)
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->day_of_birth = $day_of_birth;
        $this->gender = $gender;
        $this->type = $type;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDayOfBirth()
    {
        return $this->day_of_birth;
    }

    public function setDayOfBirth($day_of_birth)
    {
        $this->day_of_birth = $day_of_birth;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
