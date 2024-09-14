<?php

$host = "localhost";
$dbname = "test_db";
$username = "gatakka";
$password = "qwerty";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;