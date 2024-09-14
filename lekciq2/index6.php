<?php

sum2numbers1(1,2);
sum2numbers(2);

//($a,$b) параметър
function sum2numbers1($a,$b) {
    echo $a+$b;
    echo '<br>';
}


function sum2numbers($c,$a=4,$b=4) {
    echo $a+$b;
} 