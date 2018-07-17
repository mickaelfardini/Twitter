<?php
require_once '../conf/config.php';
spl_autoload_register(function ($class_name) {
    require_once "../core/" . $class_name . '.php';
});

Session::startSessionAction();
$controller = isset($_GET['page']) ? ucfirst($_GET['page']) . "Controller" : "IndexController";
$model = isset($_GET['page']) ? ucfirst($_GET['page']) . "Model" : "IndexModel";
$action = isset($_GET['action']) ? $_GET['action'] . "Action" : "defaultAction";
include "controllers/" . ucfirst($controller) . ".php";
include "models/" . ucfirst($model) . ".php";
$controller::$action();