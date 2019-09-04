<?php
/**
 * Averiguamos cual es el controlador y accion que el usuario requiere
 */

// incluimos las variables de configuracion
require 'config.php';

// directorio de controladores
$controllersFolder = 'controllers/';
// controlador por defecto
$controllerDefault = 'products';

// accion por defecto
$actionDefault = 'listar';

// revisamos si hay alguna peticion por url (mediante metodo GET)

// obtenemos el controlador
if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = $controllerDefault;
}

// obtenemos la accion
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = $actionDefault;
}

// obtenidos el controlador y la accion
// formamos el archivo del controlador ej. 'controllers/productsController.php'
$controller = $controllersFolder . $controller . 'Controller.php';

// incluimos el archivo del controlador
if (is_file($controller)) {
    require_once $controller;
} else {
    die('El controlador no existe - 404 not found.');
}

// llamamos la action o detemos todo si no existe
if (is_callable($action)) {
    // ej. listar();
    $action();
} else {
    die('La accion no existe - 404 not found.');
}

