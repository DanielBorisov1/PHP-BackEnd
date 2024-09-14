<?php
$con = mysqli_connect("localhost", "qatakka", "qwerty", "videoclip");

if (!$con) {
    echo "no database";
}


mysqli_set_charset($con,'utf8');


//?-placeholder в последствие ще слагаме някакви данни
//проверява дали sqla e валиден нищо не прави само седи и чака
$stmt = mysqli_prepare($con, 'SELECT user_name,user_age FROM users WHERE user_name=? AND pass=?') ; //($con,'SELECT * FROM users WHERE username=? AND pass=?')  ($con, 'INSERT INTO USERS () VALUES (?,?) 
//ако няма stmt 
if(!$stmt) {   
   echo 'error';    
}


//  username=? AND pass=?' отговаря   $_GET['name'], $_GET['pass'] "s"-string 'i'-intiger 'b' - blob 'd'- float ili double
mysqli_stmt_bind_param($stmt, 'ss', $_GET['name'], $_GET['pass']);
//нещо като msql query
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $user_name, $user_age);
mysqli_stmt_fetch($stmt);


echo $user_name. ' -- ' . $user_age;