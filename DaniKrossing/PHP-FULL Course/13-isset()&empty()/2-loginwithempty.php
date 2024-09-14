<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container py-2 ">
        <div class="row">
            <form action="2-loginwithempty.php" method="post">
                <div class="col-2">
                    <label for="">username:</label>
                    <input type="text" name="username">
                </div>
                <div class="col-2">
                    <label for="">password:</label>
                    <input type="password" name="password">
                </div>
                <input type="submit" name="login" value="Log in">
            </form>
        </div>
    </div>

</body>

</html>


<?php


//isset() = Returns TRUE if a varible is declared and not null; ако стойноста е декларирана и не е нулева връща TRUE
//empty() = Returns TRUE if a varible is not declared, false, null, "" връща true ако стойноста не е декларирана, false, null ---- ако е null или false– връща true, но ако е true задачата той ще върне false

/*
foreach($_POST as $key => $value) {
   
    echo "{$key} = {$value} <br>";

}*/


if(isset($_POST["login"])) {


    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){ // ако напишем нещо в полето ще го даде false и ще изпълни else //но ако не напишем ще ни даде true и ще изпълни if 
       echo"Username is missing";
    } elseif(empty($password)) { //ако не напишем password ще даде true и ще изпълни   echo"password is missing";
        echo"password is missing";
    }
    
    else {
        echo "Hello {$username}";
    }
}


?>