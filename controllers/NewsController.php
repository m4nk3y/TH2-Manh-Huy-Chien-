<?php

require_once 'models/News.php';
require_once 'models/Category.php';
class NewsController{
    public function index() {
        $newsModel = new News();
        $newList = $newsModel->getAllNews();
        require_once __DIR__ . '/../views/home/index.php';
    }
    public function detail($id) {
        $newsModel = new News();  
        $newsDetail = $newsModel->getNewsById($id);
        if (!$newsDetail) {
            die("News item not found.");
        }
        require_once "views/news/detail.php";  
    }
    public function search() {
        $newsModel = new News();
        $categoryModel = new Category();
        $query = isset($_GET['query']) ? trim($_GET['query']) : '';
        session_start();
        $username_log = $_SESSION['username_log']; 
        $categoryList = $categoryModel->getAllCategories(); 
        $newList = $newsModel->getAllNews(); 
        if ($query) {
            try {
                $results = $newsModel->search($query); 
                  
                require_once __DIR__ . '/../views/home/index.php';
            } catch (Exception $e) {
                echo "Error searching news: " . $e->getMessage();
            }
        } else {
            echo "Please enter a search query.";
        }
    }
}
?>