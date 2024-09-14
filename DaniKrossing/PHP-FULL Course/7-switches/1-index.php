<?php

$grade = "A";

if($grade == "A"){
    echo "You did great";
}
elseif($grade == "B"){
    echo"You pickup 'B'";
}
elseif($grade == "C"){
    echo"You pickup 'C'";
}
elseif($grade == "D"){
    echo"You pickup 'D'";
}
elseif($grade == "F"){
    echo"You pickup 'F'";
}
else{
    echo"{$grade} is not a valid grade";
}

?>