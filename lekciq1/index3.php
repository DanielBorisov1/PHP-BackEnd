<?php

$myArray['username']= 'gatakka';
$myArray['pass']= 'qwerty';
$myArray[1]= array(4,5,6);
$myArray['email']= 'qwerty@something.com';



//за всяко едно 'foreach'j

//ключът на масива ще бъде от променливата $key(username; pass; email) а стойността от променливата $val (gattaka; qwerty; qwerty@something)
foreach($myArray as $key=>$val) {
 
    echo $key.'--' .$val.'<br>';

}