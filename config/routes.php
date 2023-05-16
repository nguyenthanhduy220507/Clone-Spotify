<?php

class Routes
{
    private $controller="home";
    private $action="index";
    private $params=[];

    public function __construct()
    {
        $arr = $this->urlProcess();
        // Controller
        if (file_exists("./controllers/".$arr[0].".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./controllers/". $this->controller .".php";
        $this->controller = new $this->controller;
        // Action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // Params
        $this->params = $arr?array_values($arr):[];
        
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    private function urlProcess()
    {
        if (!isset($_GET["url"])) {
            $_GET["url"] = "home/index";
        }
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
