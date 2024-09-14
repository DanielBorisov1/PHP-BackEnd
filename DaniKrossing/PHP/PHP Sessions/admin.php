<?php

session_start();
require_once('./../inc/config.php');
require_once('./../inc/functions.inc.php');

ensure_user_is_authenticated();

echo $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="form-group mt-2">
        
        <a href="logout.php" class="btn btn-brand ">Logout</a>
    </div>

</body>

</html>