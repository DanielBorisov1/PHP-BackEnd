<?php


$username =array("Bro", "The", "Code");
$phone = "123-456-7890";

//$username = strtolower($username); малки букви
//$username = strtoupper($username); прави буквите големи
//$username = trim($username); премахва излишното разстояние
//$username = str_pad($username, 20, "0"); добавя 20 нули
//$phone = str_replace("-", "/", $phone); string replace function сменя знаците
//$username = strrev($username); обръща текста огледално 
//$username = str_shuffle($username); сменя буквите на текса в различни когато бъде refreshnat

//$equals = strcmp($username, "Bro Code"); ако двата стринга са същите тогава ще върне 0 ако е различен ще върне 1 
//                 $username = "Bro Code";
//$count = strlen($username); брои буквите на стойността 

//$index = strpos($phone, "-"); брои буквите на пъвата цифра в номера "123"

//$firstname = substr($username, 0, 3); 0-3 означава да почне от първата буква и да стигне до третата
//$lastname = substr($username, 4); показва всичко след 4-тия символ

/*$fullname = explode(" ", $username); отделя думите на отделен ред

foreach($fullname as $name) {
    echo $name. "<br>";
}*/

$username = implode(" ", $username);

echo $username;