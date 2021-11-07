<?php
    require "./Core/Controller.php";
    require "./Core/DB.php";
    session_start();
    $controllerName = ucfirst($_REQUEST['controller']??'Menu').'Controller';
    $actionName = $_REQUEST['action']??'show';
    require "./Controllers/${controllerName}.php";
    $controller = new $controllerName;

    $controller->$actionName();