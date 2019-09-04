<?php $title = 'Productos'; ?>

<?php include 'views/layouts/head.php'; ?>

<?php include 'views/layouts/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include 'views/layouts/sidebar.php'; ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Nuevo Producto</h1>

                </div>

                <?php include 'views/layouts/errors.php'; ?>

                <form action="index.php?controller=product&action=store" method="post">

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre:" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Precio:" required
                               min="1">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Cantidad</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Cantidad:"
                               required min="1">
                    </div>

                    <button type="submit" class="btn btn-success"><span data-feather="save"></span> Guardar</button>

                </form>

            </main>
        </div>
    </div>

<?php include 'views/layouts/footer.php'; ?>