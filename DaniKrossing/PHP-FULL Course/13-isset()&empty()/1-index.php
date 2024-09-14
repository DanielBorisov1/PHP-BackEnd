<?php


//isset() = Returns TRUE if a varible is declared and not null; ако стойноста е декларирана и не е нулева връща TRUE
//empty() = Returns TRUE if a varible is not declared, false, null, "" връща true ако стойноста не е декларирана, false, null


$username = "BroCode";

if(empty($username)) {
    echo"This varible is empty";
} else {
    echo "This varible is NOT empty";
}

