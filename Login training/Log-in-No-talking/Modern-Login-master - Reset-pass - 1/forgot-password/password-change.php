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

            <form action="password-reset-code.php" method="post">
                <h1 class="dola">Forgot Password</h1>

                <!--PHP errors-->
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>


                <!--Remember me name-->
                <input class="ms-2 " type="email" name="email" placeholder="Password">

                <!--Remember me name-->
                <input class="ms-2 " type="email" name="email" placeholder="Re-password">
            

                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>

</html>