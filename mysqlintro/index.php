<?php

include("header.php");

?>

<form method="POST">

    <textarea name="txt" id=""></textarea>
    <input type="submit" value="Добави">

</form>

<?php
$connection = mysqli_connect('localhost', 'gatakka', 'qwerty', 'telerik');

if (!$connection) {
    echo "no database";
    exit;
}

mysqli_set_charset($connection, 'utf8');


/*mysqli_query($connection,'UPDATE users SET is_active=1 WHERE 
age>=18 AND age<24 AND is_active=0'); ЩЕ НИ НАПРАВИ ВСИЧКИ ОТ 18 ДО 24 ГОДИШНИ АКТИВНИ*/


/*mysqli_query($connection,'DELETE FROM users WHERE 
age>50 AND is_active=0'); би трябвало да изтрие всички потребители които са над 50 години и са с active_0*/





//------------             // user_name as un = казваме че искаме вместо user_name да го наричаме un
$q = mysqli_query($connection, 'SELECT user_name,age,is_active
FROM users 
WHERE age>=18 AND age<24 AND is_active=1 
ORDER BY age ASC LIMIT 0 ,100'); //заявка //ORDEY BY сортира (DESC-сортира по обратен ред) (ASC-сортира по възходящ) (LIMIT 0,10 10,10-ще ми върме 10 резултата започвайки от 10тия )

//WHERE age>=18 AND is_active=1  взима всички които са active и са над 18год
//WHERE age>=18 AND age<24 AND is_active=1  от 18 до 24 които са активни
if (!$q) {
    echo 'error';
}

if ($q->num_rows > 0) {

    echo '
<table>
 <tr>
  <td>Username</td>
  <td>Age</td>
  <td>Is active</td>
</tr>';

    while ($row = $q->fetch_assoc()) { // казваме 'за всяка една интерация' ще ни бъде един ред

        echo '
    <tr>
      <td>' . $row['user_name'] . '</td>
      <td>' . $row['age'] . '</td>
        <td>' . $row['is_active'] . '</td>
    </tr>';
    }
}

else {
    echo 'No results';
}



//-------------

//2 създаваме 500 потребителя
/*for ($i = 1; $i <= 500; $i++) {
    $sql='INSERT INTO users (user_name,password,age,is_active) 
    VALUES("test'.$i.'","qwerty",'.rand(3, 65). ','.rand(0, 1).')';
    mysqli_query($connection, $sql);
} */


if ($_POST) {

    //1
    $msg = trim($_POST['txt']);
    $msg = mysqli_real_escape_string($connection, $msg); //кара тази mysql инжекция да работи и попречва да ни сринат базата данни
    $sql = 'INSERT INTO msg (msg_data) VALUES ("' . $msg . '")';
    //echo $sql;
    // exit;

    if (mysqli_query($connection, $sql)) {
        echo 'OK';
    } else {
        echo 'ERROR';

        echo mysqli_error($connection);
    }
}


include('footer.php');
