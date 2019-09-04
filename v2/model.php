<?php
// conexion a la base de datos con php
// utilizando la libreria PDO (Acceso a Datos Orientado a Objetos)
$db = new PDO($dns, $username, $password);
// consulta sql
$sql = 'SELECT * FROM products';
// preparar consulta
$query = $db->prepare($sql);
// ejecutar consulta
$query->execute();

// obtener resultados
$products = $query->fetchAll(PDO::FETCH_ASSOC);

// cerramos conexion a la base de datos
$db = null;
?>