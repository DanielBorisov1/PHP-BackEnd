<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    try {

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //ERROR MASSAGE HANDLERS
        $errors = []; //масив който показва колко грешки имаме общо в написаното от нас в signup полето


        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        //ТУКА ПИШЕ ЧЕ ИМА ГРЕШКА!!
        if (is_username_taken($pdo,  $username)) {
            $errors["username_taken"] = "Username alredy taken!";
        }

        //проверява дали emaila се използва 3
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }


        require_once 'config_session.inc.php';


        if ($errors) {  //ако няма дата тогава то ще върне false и това ще тръгне да връща true ако датата е вярна 
            $_SESSION["errors_signup"] = $errors;


            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;


            header("Location: ../index.php");
            die();
        }

        create_user($pdo, $pwd, $username,  $email);

        header("location: ../index.php?signup=success"); //връща потребителя към index след регистрацията

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {

        echo "Query failed" . $e->getMessage();
    }
} else {
    header("location: ../index.php");
    die();
}
