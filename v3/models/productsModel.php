<?php
// globalizamos los parametros de la configuracion
global $dns, $username, $password;

// conexion
$db = new PDO($dns, $username, $password);

/**
 * Obtener todos los productos
 *
 * @param $db
 * @return array de productos
 */
function getAllProducts($db)
{
    $sql = 'SELECT * FROM products';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}