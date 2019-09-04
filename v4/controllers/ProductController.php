<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 10/20/2018
 * Time: 10:17
 */

class ProductController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        require 'models/Product.php';

        $product = new Product();

        $products = $product->all();

        $vars['pds'] = $products;

        $this->view->show('product/index', $vars);
    }

    public function create()
    {
        $this->view->show('product/create');
    }

    public function store()
    {
        if (isset($_POST)) {
            $data = $_POST;

            if (empty($this->validate($data))) {
                require 'models/Product.php';
                $product = new Product();
                $product->name = $data['name'];
                $product->description = $data['description'];
                $product->quantity = $data['quantity'];
                $product->price = $data['price'];
                $product->save();

                header('Location: index.php?controller=product&action=show&id=' . $product->id);
            }
        } else {
            header('Location: index.php?controller=product');
        }

    }

    public function show()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            require 'models/Product.php';
            $product = Product::find($id);
            $this->view->show('product/show', ['product' => $product]);
        } else {
            header('Location: index.php?controller=product');
        }
    }

    public function edit()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            require 'models/Product.php';
            $product = Product::find($id);
            $this->view->show('product/edit', ['product' => $product]);
        }
    }

    public function update()
    {
        if (isset($_POST)) {
            $data = $_POST;

            if (empty($this->validate($data))) {
                require 'models/Product.php';
                $product = new Product();
                $product->id = $data['id'];
                $product->name = $data['name'];
                $product->description = $data['description'];
                $product->quantity = $data['quantity'];
                $product->price = $data['price'];
                $product->update();

                header('Location: index.php?controller=product&action=show&id=' . $product->id);
            }
        } else {
            header('Location: index.php?controller=product');
        }

    }

    public function delete()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            require 'models/Product.php';
            Product::delete($id);
        }
        header('Location: index.php?controller=product');
    }

    private function validate($data = [])
    {
        $errors = [];
        if ($data['name'] == '') {
            $errors['name'] = 'El nombre es requerido.';
        }
        if ($data['quantity'] == '' || $data['quantity'] < 1) {
            $errors['quantity'] = 'La cantidad debe contener un valor mayor a cero.';
        }
        if ($data['price'] == '' || $data['price'] < 1) {
            $errors['price'] = 'El precio debe contener un valor mayor a cero.';
        }

        return $errors;
    }
}