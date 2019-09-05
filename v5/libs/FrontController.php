<?php

namespace app\v5\libs;

class FrontController
{
    static function main()
    {
        // incluir archivos de configaracion
        require 'libs/SConfig.php';
        require 'libs/SPDO.php';
        require 'libs/View.php';

        require 'config.php';
        $config = SConfig::singleton();

        // obtener el controlador requerido
        if (isset($_GET['controller'])) {
            $controllerName = $_GET['controller'] . 'Controller';
        } else {
            $controllerName = 'SiteController';
        }

        // obtener la accion requerida
        if (isset($_GET['action'])) {
            $actionName = $_GET['action'];
        } else {
            $actionName = 'index';
        }

        // formar el archivo del controlador
        // ej. controllers/ProductController.php
        $controllerPath = $config->get('controllersFolder') . $controllerName . '.php';

        // verificar controlador
        if (is_file($controllerPath)) {
            require $controllerPath;
        } else {
            die('El controlador <b>`' . $controllerName . '`</b> no existe. Error 404 not found.');
        }

        // verificar accion
        if (!is_callable([$controllerName, $actionName])) {
            trigger_error('La accion <b>`' . $actionName . '`</b> no existe. Error 404 not found.',
                E_USER_NOTICE);
            return false;
        }

        // finalmente
        $controller = new $controllerName(); // new ProductController();
        $controller->$actionName(); // listar();
    }
}