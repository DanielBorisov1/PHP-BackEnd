<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];


    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        //ERROR MASSAGE HANDLERS
        $errors = []; //масив който показва колко грешки имаме общо в написаното от нас в signup полето


        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $username);


        if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if (!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'config_session.inc.php';


        if ($errors) {  //ако няма дата тогава то ще върне false и това ще тръгне да връща true ако датата е вярна 
            $_SESSION["errors_signup"] = $errors;

            header("Location: ../index.php");
            die();
        }


        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../index.php?login=success");
        $pdo = null;
        $statement = null;

        die();

    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("location: ../index.php");
    die();
}
