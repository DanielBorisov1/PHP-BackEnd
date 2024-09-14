<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="1-index.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        age: <br>
        <input type="text" name="age"> <br>
        email: <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="login" value="login"> <br>

    </form>
</body>

</html>


<?php


/*
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

       //филтър само за години
    $age = filter_input(INPUT_POST, "age" , FILTER_SANITIZE_NUMBER_INT);

         //филтър за емайл който премахва странните знаци
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); */


if (isset($_POST["login"])) {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    //ТОЗИ ФИЛТЪР ПРОВЕРЯВА ДАЛИ ИМА САМО ЧИЛСА
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    //проверява за нередности в emaila
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        echo "That email wasn't valid";
    } else {
        echo "Your email is: {$email}";
    }
}

?>