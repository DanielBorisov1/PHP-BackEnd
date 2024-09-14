<?php

$title = 'for Loop';

$favoriteGuitars = [
    'Vela',
    'Explorer',
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
            <table class="table table-striped">

                <?php


                for($i = 0; $i < count($favoriteGuitars); $i++) /*$i<10;*/ /*$i = $i + 2*/ {

                    $guitar = $favoriteGuitars[$i];

                    echo "<tr><td>$guitar</td></tr>";
                }

                ?>
            </table>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>