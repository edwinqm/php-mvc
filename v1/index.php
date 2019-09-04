<?php
// parametros de conexion a la base de datos
$driver = 'mysql';
$host = 'localhost';
$dbname = 'php_mvc';

$dns = "$driver:host=$host;dbname=$dbname";
$username = 'root';
$password = '';

// conexion a la base de datos con php
// utilizando la extension Objeto de Datos Php (PDO)
$db = new PDO($dns, $username, $password);

// consulta SQL
$sql = 'SELECT * FROM products';
// preparar la consulta
$query = $db->prepare($sql);
// ejecutar la consulta
$query->execute();

// obtener resultados
$products = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($products);
echo '</pre>';

// cerramos conexion a la base de datos
$db = null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
</head>
<body>

<table cellpadding="5" border="1" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
        <th>CANTIDAD</th>
    </tr>

    <?php foreach ($products as $product) { ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['quantity'] ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>
