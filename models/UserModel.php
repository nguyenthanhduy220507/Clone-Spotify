<?php

require_once "./config/database.php";
require_once "./models/User.php";

class UserModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function update(User $user)
    {
        $query = "UPDATE users SET username = ?, password = ?, email = ?, day_of_birth = ?, gender = ?, type = ? WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $username = $user->getUsername();
        $password = $user->getPassword();
        $email = $user->getEmail();
        $day_of_birth = $user->getDayOfBirth();
        $gender = $user->getGender();
        $type = $user->getType();
        $user_id = $user->getUserId();
        $stmt->bind_param('ssssssi', $username, $password, $email, $day_of_birth, $gender, $type, $user_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function delete($user_id)
    {
        $query = "DELETE FROM users WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getAll()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $artists = [];
        while ($row = $result->fetch_assoc()) {
            $artist = new User(
                $row['user_id'],
                $row['username'],
                $row['password'],
                $row['email'],
                $row['day_of_birth'],
                $row['gender'],
                $row['type']
            );
            $artists[] = $artist;
        }
        $stmt->close();
        return $artists;
    }

    public function getById($user_id)
    {
        $query = "SELECT * FROM users WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new User(
                $row['user_id'],
                $row['username'],
                $row['password'],
                $row['email'],
                $row['day_of_birth'],
                $row['gender'],
                $row['type']
            );
        } else {
            return null;
        }
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new User(
                $row['user_id'],
                $row['username'],
                $row['password'],
                $row['email'],
                $row['day_of_birth'],
                $row['gender'],
                $row['type']
            );
        } else {
            return null;
        }
    }

    public function create($username, $password, $email, $day_of_birth, $gender, $type)
    {
        $query = "INSERT INTO users (username, password, email, day_of_birth, gender, type) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssssss', $username, $password, $email, $day_of_birth, $gender, $type);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }
}
