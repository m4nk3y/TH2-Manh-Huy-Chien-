<?php

require_once 'models/News.php';
require_once 'models/Category.php';



class NewsController{
    public function index() {
        $newsModel = new News();
        $newList = $newsModel->getAllNews(); // Fetch news
        require_once __DIR__ . '/../views/home/index.php';
    }
    public function detail($id) {
        // Get the news item by ID
        $newsModel = new News();  // Assuming you have a News model class to fetch data
        $newsDetail = $newsModel->getNewsById($id);

        if (!$newsDetail) {
            die("News item not found.");
        }

        // Pass the news item data to the view
        require_once "views/news/detail.php";  // Include the detail view
    }



    public function search() {
        $newsModel = new News();
        $categoryModel = new Category();
        $query = isset($_GET['query']) ? trim($_GET['query']) : '';

        // Fetch categories and news list
        $categoryList = $categoryModel->getAlldata(); // Assuming getCategories() fetches the categories
        $newList = $newsModel->getAllNews(); // Fetching all news for sidebar

        if ($query) {
            try {
                // Search the news based on the query
                $results = $newsModel->search($query);  // Assuming the search method in News works
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