<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="index.php" method="post">
        <label for="">Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">

    </form>

</body>
</html>

<?php
//brake - е спирачката
$grade = $_POST["counter"];


switch($grade){
  case "A":
    echo "You did great";
    break;
    case "B":
        echo "You pickup 'B'";
        break;
        case "C":
            echo "You pickup 'C'";
            break;
            case "D":
                echo "You pickup 'D'";
                break;
                case "F":
                    echo "You pickup 'F'";
                    break;
    default:
    echo "{$grade} is not valid";
}

?>