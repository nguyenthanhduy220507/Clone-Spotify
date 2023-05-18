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
        $this->view('accounts/account', [
            'users' => $this->DB_user->getAll(),
        ]);
    }
    public function app()
    {
        $this->view('accounts/apps', [
            'users' => $this->DB_user->getAll(),
        ]);
    }
    public function change_password()
    {
        $this->view('accounts/change-password', [
            'users' => $this->DB_user->getAll(),
        ]);
    }
    public function profile()
    {
        $this->view('accounts/profile', [
            'users' => $this->DB_user->getAll(),
        ]);
    }
    public function receipt()
    {
        $this->view('accounts/receipt', [
            'users' => $this->DB_user->getAll(),
        ]);
    }
    public function recover_playlists()
    {
        $this->view('accounts/recover-playlists', [
            'users' => $this->DB_user->getAll(),
        ]);
    }
}