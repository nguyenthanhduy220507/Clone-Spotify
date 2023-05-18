<?php

require_once "./config/controller.php";

class Auth extends Controller
{
    private $user_model;
    public function __construct()
    {
        $this->user_model = $this->model('UserModel');
    }
    public function login_view()
    {
        $this->view('auth/login');
    }

    public function auth_login()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            // get username and password from AJAX request
            $username = $_POST['username'];
            $password = $_POST['password'];
            $success = false;
            $user = $this->user_model->getUserByUsername($username);
            $type = '';
            // Check if user is found and password is correct
            if ($user != null && password_verify($password, $user->getPassword())) {
                $success = true;
                $type = $user->getType();
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['current_song'] = $this->model('SongModel')->getAll()[0]->getSongId();
                $_SESSION['type'] = $type;
            }
            // return JSON response
            header('Content-Type: application/json');
            echo json_encode(array('success' => $success, 'type' => $type));
        }
    }

    public function register_view()
    {
        $this->view('auth/register');
    }

    public function auth_register()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            // get username and password from AJAX request
            $username = $_POST['username'];
            $password = $_POST['password'];
            $options = [
                'cost' => 12,
                'max_cost' => 12
            ];
            $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
            $email = $_POST['email'];
            $date = $_POST['date'];
            $gender = $_POST['gender'];
            $type = 'normal';
            $success = $this->user_model->create($username, $hashed_password, $email, $date, $gender, $type);
            // return JSON response
            header('Content-Type: application/json');
            echo json_encode(array('success' => $success));
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ?url=home/index');
    }
}
