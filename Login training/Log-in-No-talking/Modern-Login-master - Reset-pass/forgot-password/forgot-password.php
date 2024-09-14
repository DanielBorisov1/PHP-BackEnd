<?php 

session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/forgot.css">
</head>

<body>

    <div class="container" id="container">

        <div class="form-container sign-in">

            <form action="password-reset-code.php" method="POST">

                <?php
                 if(isset($_SESSION['status'])){
                    echo "<h4>". $_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                 }

                ?>
                <h1 class="dola">Reset Password</h1>


                <!--Remember me name-->
                <input class="ms-2 " type="text" name="email" placeholder="Email">


                <button type="submit" name="password_reset_link" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</body>

</html>