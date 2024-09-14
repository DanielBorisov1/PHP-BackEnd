<?php

//array ="variable" which can hold more than one value at a time

$foods = array("apple", "orange", "banana", "coconut");

//$foods[0] = "pineaple";
//array_push($foods, "pineapple", "kiwi");
//array_pop($foods); remove last element in array
//array_shift($foods); remove first element in array
//$reversed_foods = array_reverse($foods); обръща масива
// echo count ($foods); с цифра ни показва колко стойности имаме в масива 



foreach ($foods as $food) {//foreach взема масива foods като food
                           //food - temporary name for each element within the array
   echo $food . "<br>";
}

?>