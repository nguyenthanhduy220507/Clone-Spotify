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
        $this->view('index', [

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
        $this->view('index_login', [

        ]);
    }
}