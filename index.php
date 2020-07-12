<?php

require_once __DIR__.'/controller/defaultController.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';

switch($module) {
    default:
        $controller = new DefaultController();
}

$controller->run($action);