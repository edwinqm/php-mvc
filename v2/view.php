<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
</head>
<body>

<table cellpadding="5" cellspacing="0" border="1">
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