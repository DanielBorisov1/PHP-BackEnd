<?php
 
 //Интериране на масив по референция


 $foo=array(1,2,3);

 foreach($foo as &$val) {
    echo $val;
 }

//----------------------
 $foo=array(1,2,3);

 foreach($foo as &$val) {
   echo '<br>';
    $val=55;
    echo $val;
 }