<?php
require_once("models/Category.php");

require_once("models/News.php");
Class HomeController {
    public function index() {
        $object = new Category();
        $categoryList = $object->getAllCategories();
        $newsModel = new News();
        $newList = $newsModel->getAllNews();
        require_once __DIR__ ."/../views/home/index.php";
    }
    public function home() {
        $object = new Category();
        $categoryList = $object->getAllCategories();
        $newsModel = new News();
        $newList = $newsModel->getAllNews();
        session_start();
        $username_log = $_SESSION['username_log'];   
        require_once __DIR__ ."/../views/home/index.php";
    }


    }
    

?>