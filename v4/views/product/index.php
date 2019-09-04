<?php $title = 'Productos'; ?>

<?php include 'views/layouts/head.php'; ?>

<?php include 'views/layouts/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include 'views/layouts/sidebar.php'; ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Productos</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <p>
                    <a href="index.php?controller=product&action=create"
                       class="btn btn-primary">Nuevo Producto</a>
                </p>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCION</th>
                            <th>PRECIO</th>
                            <th>CANTIDAD</th>
                            <th>ACCIONES</th>
                        </tr>

                        <?php foreach ($pds as $product) { ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['name'] ?></td>
                                <td><?= $product['description'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td>
                                    <a href="index.php?controller=product&action=show&id=<?= $product['id'] ?>">Ver</a>
                                    |
                                    <a href="index.php?controller=product&action=edit&id=<?= $product['id'] ?>">Editar</a>
                                    |
                                    <a href="index.php?controller=product&action=delete&id=<?= $product['id'] ?>">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>

            </main>
        </div>
    </div>

<?php include 'views/layouts/footer.php'; ?>