<?php

$title = 'get Input';

include('header.inc.php');

$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT); //ако не е int- информацията ще върне false
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);


if ($category == false) {

    $category = 1;
} 

if ($limit == false) {
  $limit = 10;
}



//GET request
/*function setValues()
{
    global $category, $limit;

    $category = $_GET['category'];
    $limit = $_GET['limit'];
}

setValues();*/
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Get request</h1>
        </div>
    </div>

    <div class="row">

        Showing category: <?= $category; ?>.limit <?= $limit; ?>

    </div>

    <?php include('footer.inc.php'); ?>