<?php
require_once "./config/controller.php";
class Helps extends Controller
{
    public function help()
    {
        $this->view('helps/help', [

        ]);
    }
}