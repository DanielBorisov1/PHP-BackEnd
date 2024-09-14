<?php
//променлива
$a=4;
$b=7;
$result = sum2numbers($a,$b);
echo $result;
//1  var_dump($result);

//($a,$b) параметър
function sum2numbers($a=3, $b=5) {
    //2 return $a+$b;
    //return - също спира изпълнението на функцията
    
    return $a+$b;


}


