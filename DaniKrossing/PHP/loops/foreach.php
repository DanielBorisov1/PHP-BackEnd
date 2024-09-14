<?php

$title = 'foreach Loop';

$favoriteGuitars = [
    'Vela',
    'Explorer',
    'Strat'

];

$kvpGuitars = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'femder' => 'Strat'
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
                //foreach loop works
                //we say foreach item in favorite guitars as and were going to call each item a guitar 
                foreach ($favoriteGuitars as $guitar) {
                    echo "<tr><td>$guitar</td></tr>";
                }

                ?>
            </table>

            <table class="table table-striped">

                <?php
         
                /*could say key and then have arrow and then guitar for that varible so the key is going to be our key and 
                the guitar is going to be the value */

                /*може да се каже $key и след това стрелка и след това $guitar за тази променлива, така че ключът ще бъде нашият ключ и 
                китарата ще бъде стойността */
                foreach ($kvpGuitars as $key => $guitar) {
                    echo "<tr>
                    <td>$key</td>
                    <td>$guitar</td>
                    </tr>";
                }

                ?>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>