<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>



    <div class="container">
        <div class="box form-box">
            <h3>
                <?php // output_username(); 
                ?>
            </h3>

            <?php
            if (!isset($_SESSION["user_id"])) {


            ?>
                <header>Login</header>

                <form action="includes/login.inc.php" method="post">
                    <div class="field input">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="">
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="pwd" placeholder="">
                    </div>

                    <div class="field ">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>

                    <div class="links">
                        Don't have account? <a href="index-signup.php">Sign Up Now</a>
                    </div>

                </form>

                
                <?php
                //отиваме към signup_view
                check_signup_errors();
                ?>
                
            <?php } ?>
        </div>






    </div>