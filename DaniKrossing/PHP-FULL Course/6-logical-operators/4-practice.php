<?php

//let's say that your country has elections 

$age = 19;
$citizen = true;

if(!$age >= 18 || !$citizen) {

     echo "You cannot vote.";
}
else {
    echo "You can vote";
}