<?php
require_once("models/Category.php");
    Class HomeController {
        public function index() {
            $object = new Category();
            $categoryList = $object->getAlldata();
            require __DIR__ ."/../views/home/index.php";
        }
    }
?>