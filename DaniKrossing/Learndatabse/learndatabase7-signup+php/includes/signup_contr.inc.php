<?php //CONTROLER takes care of any sort of information

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email)
{
    if (empty($username) || empty($pwd) || empty($email)) {

        return true;

    } else {

        return false;
    }
}


function is_email_invalid(string $email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //ако този email е верен върни true ако не е върни false

        return true;
    } else {

        return false;
    }
}
 

function is_username_taken(object $pdo, string $username)
{
    if (get_username($pdo, $username) ) {  //ако този username е взет върни fause ако не е взет ще ни върне  true

        return true;
    } else {

        return false;
    }
}
 

//проверява дали emaila се използва 2
function is_email_registered(object $pdo, string $email)
{
    if (get_email($pdo, $email) ) {  //ако този username е взет върни fause ако не е взет ще ни върне  true

        return true;
    } else {

        return false;
    }
}
 


function create_user(object $pdo, string $pwd, string $username, string $email) 
{
    set_user($pdo, $pwd, $username, $email) ;
}
 