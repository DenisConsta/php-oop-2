<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';

$test_product = new Product(0, 'Test', 'myTest', new Category('first', 'xxx'), 500, true, null);
$integratore = new Food(200, ['latte', 'proteine'], 'mango', 2, 'Integratore', 'New Brand', new Category('Integratore', 'yyy'), 49.99, true, null);

var_dump($test_product, $integratore);

?>