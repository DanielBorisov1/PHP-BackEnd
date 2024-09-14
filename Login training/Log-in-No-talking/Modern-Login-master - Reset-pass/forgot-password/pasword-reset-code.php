<?php
session_start();
include('db_conn.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader

require 'vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token)
{

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->Username = "digiwebnex@gmail.com";
    $mail->Password = "***";

    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("digiwebnex@gmail.com", $get_name);
    $mail->addAddress($get_email);

    $mail->isHTML(true);
    $mail->Subject = "Reset Password Notification";

    $email_template = "
     <h2> Hello </h2>
     <h3>You are receiving this email because we recievd a password reset request for your account.</h3>
     <br/><br/>
     <a href='http://localhost/beginers/Login%20training/Log-in-No-talking/Modern-Login-master%20-%20Reset-pass/forgot-password/password-change.php?token=$token&email=$get_email'> Click me </a>
     ";


    $mail->Body = $email_template;
    $mail->send();
}



if (isset($_POST['password_reset_link'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM users1 WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {

        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['user_name'];
        $get_email = $row['email'];

        $update_token = "UPDATE users1 SET verify_token='$token' WHERE email='$get_email' LIMIT 1 ";
        $update_token_run = mysqli_query($conn, $update_token);


        if ($update_token_run) {

            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "We e-mailed you a passwrod reset link";
            header("Location: forgot-password.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong. #1";
            header("Location: forgot-password.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location: forgot-password.php");
        exit(0);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HElO</h1>
</body>
</html>