<?php

    setcookie("fav_food", "pizza", time() + (8640 * 2), "/");  // -0 delete cookie

    setcookie("fav_drink", "coffee", time() + (8640 * 3), "/");

    setcookie("fav_dessert", "ice cream", time() + (8640 * 4), "/");

    /*
    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }*/

    if(isset($_COOKIE["fav_food"])){

     echo "BUY SOME {$_COOKIE["fav_food"]} !!!";

    } else {
        echo "I don't know your favorite food";
    }
?>

