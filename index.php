<?php
// Set default controller and action if not provided
$controller = isset($_GET["controller"]) ? $_GET["controller"] : 'home';
$action = isset($_GET["action"]) ? $_GET["action"] : 'index';

// Handle dynamic controller and action
$controllerClass = ucfirst($controller) . 'Controller';  // Capitalize the controller name
$controllerFile = "controllers/$controllerClass.php";    // Path to the controller file

// Check if the controller file exists
if (file_exists($controllerFile)) {
    require_once($controllerFile);  // Include the controller file
    $controllerNow = new $controllerClass();  // Create an instance of the controller

    // Check if the action exists in the controller
    if (method_exists($controllerNow, $action)) {
        // Check if the action requires an id parameter (for example, 'detail' action)
        if ($action == 'detail' && isset($_GET['id'])) {
            $controllerNow->$action($_GET['id']);  // Pass the id to the action method
        } else {
            $controllerNow->$action();  // Call the action method without any parameters
        }
    } else {
        echo "Action '$action' does not exist in controller '$controllerClass'.";
    }
} else {
    echo "Controller '$controllerClass' not found.";
}


// In your index.php or routing logic
if (isset($_GET['query'])) {
    // Directly call the search method of the NewsController
    $newsController = new NewsController();
    $newsController->search($_GET['query']);
}

?>
