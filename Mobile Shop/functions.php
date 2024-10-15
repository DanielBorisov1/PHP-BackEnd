<?php
//require MySql conn
require('database/DBController.php');

//require Product class
require('database/Product.php');

//require Cart Class
require('database/Cart.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();


//print_r($product->getData());


//Cart object
$Cart = new Cart($db);

//print_r($Cart->getCartId($product->getData('cart')));


    



