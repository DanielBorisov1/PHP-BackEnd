<?php

$hours = 50;
$rate = 15;
$weekly_pay = null;


if($hours <= 0) { //ако напишем горе като стойност -минусово число този оператор ни казва че нищо не сме изкарали, а не -$
    $weekly_pay = 0;
}

//седмично плащане ако работиш 40 часа
elseif($hours <= 40){ //часовете не трябва да са повече от 40
    $weekly_pay = $hours * $rate;     //40x15 = 600
}

//извънредно плащане
else {
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}

echo "You made \${$weekly_pay} this week";

?>