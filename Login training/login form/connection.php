<?php

$conn = mysqli_connect('localhost', 'gatakka', 'qwerty', 'loginforme');

if (!$conn) {
    echo "no database";
    exit;
}


mysqli_set_charset($conn, 'utf8');

?>