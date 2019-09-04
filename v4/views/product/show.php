<?php $title = 'Productos'; ?>

<?php include 'views/layouts/head.php'; ?>

<?php include 'views/layouts/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include 'views/layouts/sidebar.php'; ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver Producto</h1>
                </div>

                <?php
                echo '<pre>';
                print_r($product);
                echo '</pre>';
                ?>
            </main>
        </div>
    </div>

<?php include 'views/layouts/footer.php'; ?>