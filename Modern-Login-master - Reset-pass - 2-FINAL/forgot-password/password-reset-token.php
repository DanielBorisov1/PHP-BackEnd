<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['password-reset-token']) && $_POST['user_email'])
{
   //require ("./db_connection.php");
   require ("db_conn.php");
   
    $emailId = $_POST['user_email'];

    $stmt = $conn->prepare("SELECT * FROM users1 WHERE email= ?");
    $stmt->bind_param("s", $emailId);
    $stmt->execute();
    $result = $stmt->get_result();

    $row = $result->fetch_array(MYSQLI_ASSOC);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $stmt = $conn->prepare("UPDATE users1 set reset_token_hash=?, reset_token_expires_at=? WHERE email=?");
    $stmt->bind_param("sss", $token, $expDate, $emailId);
    $stmt->execute();
 
    $link = "
    <a href='http://localhost/beginers/Login%20training/Log-in-No-talking/Modern-Login-master%20-%20Reset-pass%20-%202/forgot-password/reset-password.php?key=".$emailId."&token=".$token."'>
    Click To Reset password</a>";
    
   require 'vendor/autoload.php';

   require 'vendor/phpmailer/phpmailer/src/Exception.php';
   require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
   require 'vendor/phpmailer/phpmailer/src/SMTP.php';
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "test@gmail.com"; //set gmail here
    // GMAIL password
    $mail->Password = "generated_password_here"; //set generated passwoord (16characters)
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From = "test@gmail.com"; //same email here
    $mail->FromName = 'Steve';
    $mail->SMTPDebug = 0;
    $mail->AddAddress($emailId, $row['user_name']);
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      echo "<p style='text-align:center;' >Check Your Email and Click on the link sent to your email</p>";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
  
    }
  }else{
    echo "<p style='text-align:center;'>Invalid Email Address</p>";
    
  }
}