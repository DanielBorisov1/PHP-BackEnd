<?php


$myAr=array('Gogo','Ivan', 'Dragan', 'Petko');

$count=count($myAr);

for ($i=0; $i<$count; $i++) {
 
    echo $myAr[$i]. '<br>';
    
}

echo $i;

//крайния резултат е 4 защотот i++ е последното нещо което ще бъде изпълнено и ще бъде изпълнено един път повече от броят на елементите