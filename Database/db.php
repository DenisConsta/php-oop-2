<?php

$categories = [
  new Category('Cane', 'xxx'),
  new Category('Gatto', 'yyy'),
];

$products = [
  new Product(0, 'Test', 'myTest', $categories[0], 500, true, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuIqWd964CIkvfLH11L8IQvu_rk4ZxeYH7jw&usqp=CAU'),
  new Food(200, ['latte', 'proteine'], 'mango', 1, 'Integratore', 'New Brand', $categories[1], 49.99, true, 'https://farmaciaspargolimario.it/wp-content/uploads/2022/04/ASTUCCIO_FLACONE_GATTO_VITALITA_-spar.jpg'),
  new Toy('Corda da masticare', 0.5, 2, 'Corda', 'Another Brand', $categories[0], 19.99, true, 'https://shop-cdn-m.mediazs.com/bilder/kong/signature/dual/knot/corda/con/doppio/nodo/7/400/232697_kong_signature_seil_doppelknoten_hs_02_7.jpg'),
  new Accessory(['legno', 'spugna'], 3, 3, 'Tiragraffi', 'Cat Brand' , $categories[1], 299.99, true, 'https://m.media-amazon.com/images/I/71PQ7m+-OcL._AC_SY450_.jpg'),
  
];

?>