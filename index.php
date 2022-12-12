<?php

//? models
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';

//? db
require_once __DIR__ . '/Database/db.php';

//? views
include __DIR__ .'/Views/layout/head.php';
include __DIR__ .'/Views/layout/header.php';
include __DIR__ . '/Views/partials/list.php';
include __DIR__ . '/Views/layout/footer.php';


// var_dump($products);

?>