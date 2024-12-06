<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../models/Category.php';

class AdminController
{
    public function signin() {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];         
            $userModel = new User();
            $userList = $userModel->getAllData();     
            $error = null;
            foreach ($userList as $user) {
                if ($user['username'] == $username && $user['password'] == $password) {
                    if ($user['role'] == 1) {
                        header('location: views/admin/dashboard.php');
                        exit();

                    } 
                    elseif ($user['role'] == 0) {
                        session_start(); 
                        $username_log = $_POST['username'];
                        $_SESSION['username_log'] = $username_log; 
                        $object = new Category();
                        $categoryList = $object->getAllCategories();
                        $newsModel = new News();
                        $newList = $newsModel->getAllNews();
                        require_once "views/home/index.php";
                        exit();
                    }
                }
            }
            $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
            require_once "views/admin/login.php";
        }
    }
    public function login()
    {
        require __DIR__ . "/../views/admin/login.php";
    }

    public function index()
    {
        $newsModel = new News();
        $newsList = $newsModel->getAllNews();
        include __DIR__ . '/../views/admin/news/index.php';
    }

    public function add()
    {
        $categoryModel = new Category();
        $categories = $categoryModel->getAllCategories();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_name = time() . '_' . $_FILES['image']['name'];
                $image_path = __DIR__ . '/../assets/images/' . $image_name;  

                if (move_uploaded_file($image_tmp_name, $image_path)) {
                    $newsModel = new News();
                    $newsModel->addNews($title, $content, $image_name, $category_id);
                    header("Location: dashboard.php");
                    exit;
                } else {
                    echo "Error uploading the image.";
                }
            }
        } else {
            include __DIR__ . '/../views/admin/news/add.php';
        }
    }

    public function edit($id)
    {
        $newsModel = new News();
        $news = $newsModel->getNewsById($id);

        $categoryModel = new Category();
        $categories = $categoryModel->getAllCategories();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_name = time() . '_' . $_FILES['image']['name'];
                $image_path = __DIR__ . '/../assets/images/' . $image_name;

                if (move_uploaded_file($image_tmp_name, $image_path)) {
                    $newsModel->updateNews($id, $_POST['title'], $_POST['content'], $image_name, $_POST['category_id']);
                    header("Location: dashboard.php");
                    exit;
                } else {
                    echo "Error uploading the image.";
                }
            } else {
                $newsModel->updateNews($id, $_POST['title'], $_POST['content'], $news['image'], $_POST['category_id']);
                header("Location: dashboard.php");
                exit;
            }
        } else {
            include __DIR__ . '/../views/admin/news/edit.php';
        }
    }

    public function delete($id)
    {
        $newsModel = new News();
        $newsModel->deleteNews($id);
        header("Location: dashboard.php");
    }
}
