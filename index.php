<?php

$controller = isset($_GET["controller"]) ? $_GET["controller"] : 'home';
$action = isset($_GET["action"]) ? $_GET["action"] : 'index';


$controllerClass = ucfirst($controller) . 'Controller';  
$controllerFile = "controllers/$controllerClass.php";    


if (file_exists($controllerFile)) {
    require_once($controllerFile);  
    $controllerNow = new $controllerClass();  

    
    if (method_exists($controllerNow, $action)) {
        
        if ($action == 'detail' && isset($_GET['id'])) {
            $controllerNow->$action($_GET['id']);  
        } else {
            $controllerNow->$action(); 
        }
    } else {
        echo "Action '$action' does not exist in controller '$controllerClass'.";
    }
} else {
    echo "Controller '$controllerClass' not found.";
}
if (isset($_GET['query'])) {
    $newsController = new NewsController();
    $newsController->search($_GET['query']);
}


?>
