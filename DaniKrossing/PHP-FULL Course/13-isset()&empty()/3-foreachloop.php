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
            <form action="3-foreachloop.php" method="post">
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

foreach ($_POST as $key => $value) {

    echo "{$key} = {$value} <br>";
}


?>