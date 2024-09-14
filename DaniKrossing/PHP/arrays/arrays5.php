<?php

$fruits = ["apple", "banana", "cherry"];
$test = ["Mango", "Strawberry"];

array_splice($fruits, 2, 0, $test);
print_r($fruits);