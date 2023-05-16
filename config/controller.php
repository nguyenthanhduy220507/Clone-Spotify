<?php

class Controller
{
    public function model($model)
    {
        require_once "./models/".$model.".php";
        return new $model;
    }

    public function view($view, $data = []) {
        $view = str_replace('/', DIRECTORY_SEPARATOR, $view);
        require_once "./views/" . $view . ".php";
    }
}
