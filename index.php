<?php
require_once 'config.php';

// Lấy giá trị controller và action từ URL
$controller = isset($_GET["controller"]) ? $_GET["controller"] : 'home';
$action = isset($_GET["action"]) ? $_GET["action"] : 'index';

// Tạo tên class controller và file controller
$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = "controllers/$controllerClass.php";

if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controllerNow = new $controllerClass();

    // Kiểm tra phương thức action trong controller
    if (method_exists($controllerNow, $action)) {
        $controllerNow->$action();
    } else {
        echo "Action '$action' không tồn tại trong controller '$controllerClass'.";
    }
} else {
    echo "Controller '$controllerClass' không được tìm thấy.";
}
?>
