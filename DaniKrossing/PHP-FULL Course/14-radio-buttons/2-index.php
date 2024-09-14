<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="2-index.php" method="post">
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


if (isset($_POST["confirm"])) {

    $credit_card = null; //declare our varible credit card 

    if (isset($_POST["credit_card"])) {   //ако кредитната карта е маркирана ще даде true и ще изпълни този код 
        $credit_card = $_POST["credit_card"];
    }

    //TYPE1
    /*if($credit_card == "Visa") {
     echo "You selected Visa";
    }

    elseif($credit_card == "Mastercard") {
        echo "You selected Mastercard";
    }

    elseif ($credit_card == "American Express") {
        echo"You selected American Express";
    }

    else {
         echo "Please make a selection";
    }  */

    //TYPE2
    switch ($credit_card) {
        case "Visa":
            echo "You selected Visa";
            break;
        case "Mastercard":
            echo "You selected Mastercard";
            break;
        case "American Express":
            echo "You selected American Express";
            break;

        default:
            echo "Please make a selection";
    }
}


?>