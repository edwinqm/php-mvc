<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 10/20/2018
 * Time: 10:51
 */

class SiteController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $msg = 'SISTEMA DE ADMINISTARACION DE PRODUCTOS.';

        $this->view->show('site/index', [
            'message' => $msg
        ]);
    }
}