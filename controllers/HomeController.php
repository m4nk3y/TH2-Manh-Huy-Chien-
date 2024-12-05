<?php
require_once("models/Category.php");
    Class HomeController {
        public function index() {
            $object = new Category();
            $categoryList = $object->getAllCategories();
            require __DIR__ ."/../views/home/index.php";
        }
    }
?>