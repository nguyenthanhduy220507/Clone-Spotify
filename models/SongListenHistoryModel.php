<?php
require_once "./config/database.php";
require_once "./models/SongListenHistory.php";
require_once "./models/UserModel.php";
require_once "./models/SongModel.php";

class SongListenHistoryModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $this->db = $conn;
    }

    public function create(SongListenHistory $songListenHistory)
    {
        $query = "INSERT INTO song_listen_history (user_id, song_id, listen_date)
          VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $user_id = $songListenHistory->getUser()->getUserId();
        $song_id = $songListenHistory->getSong()->getSongId();
        $listen_date = $songListenHistory->getListenDate();
        $stmt->bind_param('iis', $user_id, $song_id, $listen_date);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function update(SongListenHistory $songListenHistory)
    {
        $query = "UPDATE song_listen_history SET user_id = ?, song_id = ?, listen_date = ? WHERE listen_id = ?";
        $stmt = $this->db->prepare($query);
        $user_id = $songListenHistory->getUser()->getUserId();
        $song_id = $songListenHistory->getSong()->getSongId();
        $listen_date = $songListenHistory->getListenDate();
        $listen_id = $songListenHistory->getListenId();
        $stmt->bind_param('iisi', $user_id, $song_id, $listen_date, $listen_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function delete($listen_id)
    {
        $query = "DELETE FROM song_listen_history WHERE listen_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $listen_id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function getById($listen_id)
    {
        $query = "SELECT * FROM song_listen_history WHERE listen_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $listen_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if ($row) {
            $user_model = new UserModel();
            $song_model = new SongModel();
            $listen_id_new = $row['listen_id'];
            $user_id = $row['user_id'];
            $song_id = $row['song_id'];
            $listen_date = $row['listen_date'];
            $user = $user_model->getById($user_id);
            $song = $song_model->getById($song_id);
            return new SongListenHistory(
                $listen_id_new,
                $user,
                $song,
                $listen_date
            );
        }
        return null;
    }

    public function getAll()
    {
        $user_model = new UserModel();
        $song_model = new SongModel();
        $query = "SELECT * FROM song_listen_history";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $songListenHistories = [];
        while ($row = $result->fetch_assoc()) {
            $listen_id_new = $row['listen_id'];
            $user_id = $row['user_id'];
            $song_id = $row['song_id'];
            $listen_date = $row['listen_date'];
            $user = $user_model->getById($user_id);
            $song = $song_model->getById($song_id);
            $songListenHistory = new SongListenHistory(
                $listen_id_new,
                $user,
                $song,
                $listen_date
            );
            $songListenHistories[] = $songListenHistory;
        }
        $stmt->close();
        return $songListenHistories;
    }
}
