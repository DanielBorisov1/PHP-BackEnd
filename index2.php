<?php

//логически оператори






//порменливи
$username='gatakka';
$passlord='qwerty1';
$isAdmin=true;

//== -ако е равно
//  ||-или
// &&- и
//ако резултата от тези две е в скобите е truе или админ е true тогава влез в echo 'Correct'
if(($username=='gatakka' || $passlord=='qwerty')
&& $isAdmin==true){
   
  echo 'Correct';
   
}



else {
    echo 'Wrong';
}


// != - обърни ми резултата ще ни върне fause
////////////
if($username!='gatakka'){
   echo '<br>';
   echo 'Correct';   
}


else {
    echo '<br>';
    echo 'Wrong';
}

