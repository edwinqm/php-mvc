<?php
// parametros de conexion a la base de datos
$driver = 'mysql';
$host = 'localhost';
$dbname = 'php_mvc3';

$dsn = "$driver:host=$host;dbname=$dbname";
$username = 'root';
$password = '';

// instanciamos la clase Config Singleton
$config = SConfig::singleton();

$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

$config->set('db_dsn', $dsn);
$config->set('db_username', $username);
$config->set('db_password', $password);