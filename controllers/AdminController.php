<?php
require_once("models/User.php");
class AdminController {
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
                        require_once "views/admin/dashboard.php";
                        exit();
                    } 
                    else if ($user['role'] == 0) {
                        $username_log = $_POST['username'];
                        require_once "views/home/index.php";
                        exit();
                    }
                }
            }
            $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
            require_once "views/admin/login.php";
        }
    }
    
    
    public function login() {
        
        require __DIR__ ."/../views/admin/login.php";
    }
    
   
}
