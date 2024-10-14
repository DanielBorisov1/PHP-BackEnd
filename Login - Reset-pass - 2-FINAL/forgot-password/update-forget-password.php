<?php
if(isset($_POST['passwordreset'], $_POST['reset_token_hash'], $_POST['user_email']))
{
    require 'db_conn.php';
    $emailId = $_POST['user_email'];
    $token = $_POST['reset_token_hash'];
    $password = $_POST['passwordreset'];
  
   //$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

   $hashedpassword = md5($password);

    $loginpage = 'http://localhost/beginers/Login%20training/Log-in-No-talking/Modern-Login-master%20-%20Reset-pass%20-%202/index.php';
    $reset = 'http://localhost/password_reset/reset-password.php';

    $stmt = $conn->prepare("SELECT * FROM `users1` WHERE `reset_token_hash`=? AND `email`=?");
    $stmt->bind_param("ss", $token, $emailId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->num_rows;

    $exp = "0000-00-00";
    if($row){
        $stmt = $conn->prepare("UPDATE `users1` SET `password`=?, `reset_token_hash`=NULL, `reset_token_expires_at`=? WHERE `email`=?");
        $stmt->bind_param("sss", $hashedpassword, $exp, $emailId);
        $stmt->execute();
        echo "<p style='text-align: center; color:green;'>Congratulations! Your password has been updated successfully <a href='$loginpage'>Login</a></p>";
    }else{
        echo "<h1 style='text-align: center; color:red; height: 100%; width: 100%; display: flex; position: fixed; align-items: center; justify-content: center;'><a href='$reset' style='color:red;'>Please try again!!</a></h1>";
    }
}

/**
 * This code snippet is a PHP script that handles password reset functionality.
 * It checks if the required POST parameters (passwordreset, reset_link_token, user_email) are set.
 * If they are set, it connects to the database, retrieves the user's email, reset link token, and new password from the POST data.
 * It then hashes the new password using the password_hash() function.
 * The script prepares and executes a SELECT query to check if the reset link token and email match any records in the 'users' table.
 * If a match is found, it prepares and executes an UPDATE query to update the user's password, reset link token, and expiration date.
 * Finally, it displays a success message if the update was successful, or an error message if no match was found.
 *
 * @param string $_POST['passwordreset'] The new password entered by the user.
 * @param string $_POST['reset_link_token'] The reset link token received by the user.
 * @param string $_POST['user_email'] The email address of the user.
 * @return void
 */