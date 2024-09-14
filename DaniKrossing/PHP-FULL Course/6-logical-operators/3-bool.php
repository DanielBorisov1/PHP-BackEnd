<?php


$temp = 15;
$cloudy = false;
//condition1= true condition2= false
//$temp < трябвда да бъде по-малък от 0
// $temp > трябва да бъде по голям от 30

if($temp < 0 || $temp > 30) {
 echo "The weather is bad.<br>";
}
else {
 echo "The weather is good.<br>";
}

if(!$cloudy) {
     echo "It's sunny.";
}
else {
    echo "It's cloudy.";
}
