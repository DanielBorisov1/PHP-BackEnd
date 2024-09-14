<?php 


$pwdSighnup = "Krossing";

//array
$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSighnup, PASSWORD_DEFAULT, $options);


$pwdLogin = "Krossing";


if (password_verify($pwdLogin, $hashedPwd)) {   
    echo"They are the same";
}

else {

    echo"They are not the same";
}
