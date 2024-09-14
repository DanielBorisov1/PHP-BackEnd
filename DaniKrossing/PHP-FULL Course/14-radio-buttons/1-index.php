<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="1-index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="credit_card" value="American Express">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>

</body>

</html>

<?php


if(isset($_POST["confirm"])){

    if(isset($_POST["credit_card"])){   //ако кредитната карта е маркирана ще даде true и ще изпълни този код 
        $credit_card = $_POST["credit_card"];
        echo $credit_card;
    } else {  //НОО АКО НЕ Е СЕЛЕКТИРАНА КАРТАТА ЩЕ ДАДЕ FALSE и ЩЕ ИЗПЪЛНИ ТОЗИ КОД
       echo "Please make a selection";
    }
   

}


?>