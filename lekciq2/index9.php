<?php
//предаване по референция
//променлива
$foo=4; 
$b=7;
$result = sum2numbers($foo,$b);

echo $foo;

//($a,$b) параметър
function sum2numbers(&$a, $b) {
    $a=222;
    return $a+$b;
}


