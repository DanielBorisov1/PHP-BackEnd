<?php
//brake - е спирачката
$grade = "A";


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