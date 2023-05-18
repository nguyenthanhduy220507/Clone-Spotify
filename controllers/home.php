<?php
require_once "./config/controller.php";
class Home extends Controller
{
    public function index()
    {
        // $productDB = $this->model("ProductsModel");
        // $this->view("index", [
        //     "all-pro"=>$productDB->getAllProducts(),
        //     "all-type"=>$productDB->getAllCategories(),
        //     "pro-db"=>$productDB,
        // ]);
        $DB = $this->model("PlaylistModel");
        $this->view('home/index', [
            'playlists' => $DB->getAll()

        ]);
    }
    

    public function index_login()
    {
        // $productDB = $this->model("ProductsModel");
        // $this->view("index", [
        //     "all-pro"=>$productDB->getAllProducts(),
        //     "all-type"=>$productDB->getAllCategories(),
        //     "pro-db"=>$productDB,
        // ]);
        $DB = $this->model("PlaylistModel");
        $this->view('home/index_login', [
            'playlists' => $DB->getAll()
        ]);
    }
}