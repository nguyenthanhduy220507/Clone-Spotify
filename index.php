<?php

// How controllers call Views & Models
require_once "./config/controller.php";

// Process URL from browser
require_once "./config/routes.php";

// Connect Database
require_once "./config/database.php";

session_save_path('./tmp/');
session_start();
$routes = new Routes();
