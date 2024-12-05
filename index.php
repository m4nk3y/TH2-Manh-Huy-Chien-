<?php
require_once 'config.php';
$controller = isset($_GET["controller"]) ? $_GET["controller"] : 'home';
$action = isset($_GET["action"]) ? $_GET["action"] : 'index';
$controllerClass = ucfirst($controller) . 'Controller';
$controllerFile = "controllers/$controllerClass.php";

if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controllerNow = new $controllerClass();
    if (method_exists($controllerNow, $action)) {
        $controllerNow->$action();
    } else {
        echo "Action '$action' không tồn tại trong controller '$controllerClass'.";
    }
} else {
    echo "Controller '$controllerClass' không được tìm thấy.";
}
?>