<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

$alert = '';




if (isset($_POST['submit'])) {

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $msg = $_POST['msg'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'danielborisov305@gmail.com';
        $mail->Password = '';
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';


        $mail->setFrom('danielborisov305@gmail.com');
        $mail->addAddress('example@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Recived form Contact:' . $FirstName . $LastName;
        $mail->Body = "FirstName: $FirstName <br> LastName: $LastName <br> Email: $Email <br> Subject: $Subject<br> Message: $msg ";

        $mail->send();

        $alert = "<div class='alert-success'><span>Message Sent! Thanks for contact us. </span><div>";
    } catch (Exception $e) {

        $alert = "<div class='alert-error'><span>Error massage</span></div>";
    }
} 