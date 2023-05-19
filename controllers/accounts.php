<?php
require_once "./config/controller.php";
class Accounts extends Controller
{
    private $DB_user;

    public function __construct()
    {
        $this->DB_user = $this->model('UserModel');
    }
    public function account()
    {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $this->view('accounts/account', [
            'user' => $user,
        ]);
    }
    public function app()
    {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $this->view('accounts/apps', [
            'user' => $user,
        ]);
    }
    public function change_password()
    {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $this->view('accounts/change-password', [
            'user' => $user,
        ]);
    }
    public function change_password_auth()
    {
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
        ) {
            $id = $_POST['id'];
            $password = $_POST['password'];
            $new_password = $_POST['new_password'];
            $success = true;
            $user = $this->model('UserModel')->getByID($id);
            if ($user == null || !password_verify($password, $user->getPassword())) {
                $success = false;
            }
            if ($success) {
                $options = [
                    'cost' => 12,
                    'max_cost' => 12
                ];
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT, $options);
                $user->setPassword($hashed_password);
                $success = $this->model("UserModel")->update($user);
            }
            // return JSON response
            header('Content-Type: application/json');
            echo json_encode(array('success' => $success));
        }
    }
    public function profile()
    {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $this->view('accounts/profile', [
            'user' => $user,
        ]);
    }
    public function receipt()
    {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $this->view('accounts/receipt', [
            'user' => $user,
        ]);
    }
    public function recover_playlists()
    {
        $userDB = $this->model("UserModel");
        if (!isset($_SESSION['username'])) {
            header("Location: ?url=home/index");
        }
        $user = $userDB->getUserByUsername($_SESSION['username']);
        $this->view('accounts/recover-playlists', [
            'user' => $user,
        ]);
    }
}
