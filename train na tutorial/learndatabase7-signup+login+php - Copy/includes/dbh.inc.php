<?php

$dsn = "mysql:host=localhost; dbname=myfirstdatabase";
$dbusername = "gatakka";
$dbpassword = "qwerty";


try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}  

catch(PDOException $e) {

    die( "Connection failed" . $e->getMessage());
}


?>

