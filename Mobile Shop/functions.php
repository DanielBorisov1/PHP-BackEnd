<?php
//require MySql conn
require('database/DBController.php');

//require Product class
require('database/Product.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);

//print_r($product->getData());



