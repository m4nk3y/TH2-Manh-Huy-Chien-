
        <?php
        require_once __DIR__ . '/../../controllers/AdminController.php';

        $adminController = new AdminController();

        $route = $_GET['route'] ?? 'index';

        if ($route === 'add') {
            $adminController->add();
        } elseif ($route === 'edit') {
            $id = $_GET['id'] ?? 0;
            $adminController->edit($id);
        } elseif ($route === 'delete') {
            $id = $_GET['id'] ?? 0;
            $adminController->delete($id);
        } elseif (isset($_GET['route']) && $_GET['route'] === 'save') {
            $adminController = new AdminController();
            $adminController->add();
        } else {
            $adminController->index();
        }
        ?>
