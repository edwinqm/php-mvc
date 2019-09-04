<?php

/**
 * Acciones que seran ejecutadas desde el archivo de entrada 'index.php'
 */

function listar()
{
    // incluimos el modelo que corresponde
    // que sera incluido desde donde llamemos a este controlador
    // que en este caso sera el index.php que se encuentra en la raiz
    require 'models/productsModel.php';

    // obtenemos los productos utilizando la funcion
    $products = getAllProducts($db);

    // pasamos a la vista el array de productos
    require  'views/list.php';
}