<?php
$connection = mysqli_connect('localhost', 'gatakka', 'qwerty', 'videoclip');

if (!$connection) {
    echo "no database";
}


mysqli_set_charset($connection, 'utf8');


//?-placeholder в последствие ще слагаме някакви данни
//проверява дали sqla e валиден нищо не прави само седи и чака
$stmt = mysqli_prepare($connection, 'SELECT user_name,user_age FROM users WHERE pass=?'); //($con,'SELECT * FROM users WHERE username=? AND pass=?')  ($con, 'INSERT INTO USERS () VALUES (?,?) 
//ако няма stmt 
if (!$stmt) {
    echo 'error';
}


//  username=? AND pass=?' отговаря   $_GET['name'], $_GET['pass'] "s"-string 'i'-intiger 'b' - blob 'd'- float ili double
mysqli_stmt_bind_param($stmt, 's', $_GET['pass']);
//нещо като msql query
mysqli_stmt_execute($stmt);
//mysqli_stmt_bind_result($stmt, $user_name, $user_age);


$rows = mysqli_stmt_result_metadata($stmt);

while ($filed = mysqli_fetch_field($rows)) {

    echo '<pre>' . print_r($filed, true) . '</pre>';
}
