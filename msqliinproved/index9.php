<?php
$con=mysqli_connect("localhost","qatakka","qwerty","videoclip");

if (!$con) {
    echo "no database";
}

mysqli_set_charset($con, 'utf8');


//от урок 9
/*$sql='SELECT * FROM users WHERE user_name="'.mysqli_real_escape_string($con, $_GET['name']).'" "AND pass="'.mysqli_real_escape_string($con, $_GET['pass']).' " ' ;

echo $sql;

//заявка
$q= mysqli_query($con, $sql);

//как може да вземем резултата от тази заявка
while($row=mysqli_fetch_assoc($q)) {

    echo '<pre>'.print_r($row, true).'</pre>';
}*/



