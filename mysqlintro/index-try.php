
<?php

$connection = mysqli_connect('localhost', 'gatakka', 'qwerty', 'telerik');

if (!$connection) {
    echo "no database";
    exit;
}

mysqli_query($connection, 'SET NAMES utf8');











$q = mysqli_query($connection, 'SELECT * FROM users');
if (!$q) {
    echo 'error in database';
    //по детайлна информация echo mysqli_error($connection);
}

//по този начин се интерират на информация от mysql
//fatch_assoc
//fatch_array
while ($row = $q->fetch_array()) { //докато row взима стойнос от  fetch_assoc тоест докато fetch_assoc не върне fause а той ще върне fause когато свършат ресзултатите 

    //echo '<pre>'.print_r($row, true). '</pre>';
    echo $row['user_name']; //по този начин взимаме имената от базите данни

}

//var_dump($q); какво съдържа в себе си
