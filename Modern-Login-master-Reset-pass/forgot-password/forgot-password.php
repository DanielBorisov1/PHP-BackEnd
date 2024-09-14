<?php 
include_once('db_conn.php');

if(isset($_REQUEST['pwdrst'])) {

    $email = $_REQUEST['email'];
    $chek_email = mysqli_query($conn, "SELECT email FROM users1 WHERE email='$email' ");
    $res = mysqli_num_rows($chek_email);

    if($res>0) {
        $message = '<div>
        <p><b>Hello!</b></p>
        <p>You are recieving this email because we recieved a password reset request for your account.</p>
        <br>

        <p><button class="btn btn-primary"><a href="">Reset Password</button></p>
        <br>
        <p>If you did not request a password reset, no further action is required. </p>
        </div> ';
    }


}

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

            <form  method="POST">

         
                <h1 class="dola">Reset Password</h1>


                <!--Remember me name-->
                <input class="ms-2 " type="text" name="email" placeholder="Email">


                <button type="submit" name="pwdrst" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</body>

</html>




