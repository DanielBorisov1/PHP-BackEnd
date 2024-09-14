<?php

$title = 'scope';

$guitars = [

    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender'],
];

//$guitar_names = array_column($guitars, 'name');




function pluck($arr, $key)
{
 $result = array_map(function($item) use($key) {

    return $item[$key];

 }, $arr);


 return $result;
}

function return_name ($item) {
    return $item['name'];
}


$guitar_names = pluck($guitars, 'manufacturer');


/*$greeting = 'hello, world';//global
function sum($a, $b)
{
    global $greeting;
    echo $greeting ; 
    $result = $a + $b;

    return $result;
}

$result = sum(1, 2);*/



function output($value /*= ''*/)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}


//ARRAY
$guitars = [
    'Velas',
    'Ecplorer',
    'Strat'
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document <?= $title; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">My Favorite Guitars</h1>
            </div>
        </div>

        <div class="row">

            <?php
            //  echo '<pre>';  print_r($guitars); '</pre>';

            output($guitar_names);

            ?>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>