<?php

$myArray['username']= 'gatakka';
$myArray['pass']= 'qwerty';
$myArray[1]=array(4,5,6);
$myArray['email']= 'qwerty@something.com';



//за всяко едно 'foreach'j

//ключът на масива ще бъде от променливата $key(username; pass; email) а стойността от променливата $val (gattaka; qwerty; qwerty@something)
foreach($myArray as $key=>$val) {

     if(is_array($val)) {
      
      $val['telerik']=2;

        foreach($val as $k=>$v) { 
         echo $k.'--' .$v.'<br>';

      
        }

       
        
     }
    
}


echo $key.'--' .$val.'<br>';