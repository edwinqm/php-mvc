<?php
session_start();
require_once(__DIR__.'/../vendor/autoload.php');

require(__DIR__.'/config.php');
$p = new app\v5\models\Product();

echo $p->test();
echo '<pre>';
print_r($p->all());