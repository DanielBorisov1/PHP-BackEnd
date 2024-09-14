<?php
session_start();
require("db_conn.php");



?>


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
            <?php
            // Check if user is already logged in
            if (isset($_SESSION['user_email'])) {
                header('Location: forgotpwd.php');
                exit;
            }
            ?>

            <form action="password-reset-token.php" method="POST">
                <!--PHP errors-->
                <?php if (isset($_GET['errorforgot'])) { ?>
                    <p class="error"><?php echo $_GET['errorforgot']; ?></p>
                <?php } ?>

                <!--PHP success-->
                <?php if (isset($_GET['successforgot'])) { ?>
                    <p class="success"><?php echo $_GET['successforgot']; ?></p>
                <?php } ?>

                <h1 class="dola">Reset Password</h1>


                <!--Remember me name-->
                <input class="ms-2 " type="email" name="user_email" placeholder="Email" required>


                <button name="password-reset-token" class="btn btn-primary">Send Mail</button>

            </form>
        </div>
    </div>
</body>

</html>