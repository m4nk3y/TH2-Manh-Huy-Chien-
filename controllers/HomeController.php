<?php
require_once("models/Category.php");
require_once("models/News.php");
Class HomeController {
    public function index() {
        $object = new Category();
        $categoryList = $object->getAlldata();


        $newsModel = new News();
        $newList = $newsModel->getAllNews();
        require_once __DIR__ ."/../views/home/index.php";
    }
}
?>