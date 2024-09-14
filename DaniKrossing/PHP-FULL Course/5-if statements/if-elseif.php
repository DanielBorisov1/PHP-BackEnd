<?php

// if statement = if some condition is true, do something
//                if condition is false, don't do it 
// почва да чете информацията отгоре надолу


$age = 17;

if ($age >= 100) {
    echo "You are too old to enter this site";
}
elseif ($age >= 18) {
    echo "You may enter this site";
} 
elseif ($age <= 0) {
    echo "That wasn't a valid age";
} 
else {
    echo "You must be 18+ to enter";
}
