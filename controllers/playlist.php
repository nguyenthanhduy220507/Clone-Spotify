<?php
require_once "./config/controller.php";
class Playlist extends Controller
{
    public function playlist()
    {
        // $productDB = $this->model("ProductsModel");
        // $this->view("index", [
        //     "all-pro"=>$productDB->getAllProducts(),
        //     "all-type"=>$productDB->getAllCategories(),
        //     "pro-db"=>$productDB,
        // ]);
        $DB = $this->model("PlaylistModel");
        $this->view('playlist', [
            'playlists' => $DB->getAll()

        ]);
    }

    public function playlist_login()
    {
        // $productDB = $this->model("ProductsModel");
        // $this->view("index", [
        //     "all-pro"=>$productDB->getAllProducts(),
        //     "all-type"=>$productDB->getAllCategories(),
        //     "pro-db"=>$productDB,
        // ]);
        $DB = $this->model("PlaylistModel");
        $this->view('playlist_login', [
            'playlists' => $DB->getAll()
        ]);
    }
}