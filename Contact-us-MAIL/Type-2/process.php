<?php


if (isset($_POST['btn-send'])) {
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    if (empty($FName) || empty($LName) || empty($Email) || empty($Subject) || empty($Msg)) {

        header('location:index.php?error');
    } else {
        $to = "danielborisov305@gmail.com";

        if (mail($to, $Subject, $Msg, $Email)) {
            header("location: index.php?success");
        }
    }
} else {
    header("location: index.php");
}
