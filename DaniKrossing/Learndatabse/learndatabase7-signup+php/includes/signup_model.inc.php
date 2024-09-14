<?php //MODEL that takes care of querying the database 

declare(strict_types= 1);  
require_once 'dbh.inc.php';

function get_username(object $pdo, string $username)  
{
  $query = "SELECT username FROM users WHERE username = :username;";
  $stmt = $pdo->prepare($query); //sql injection
  $stmt->bindParam(":username", $username);
  $stmt->execute(); 


  $result = $stmt->fetch(PDO::FETCH_ASSOC); //featch взима само една част от датабазата // взима първия нов резултат 
  return $result;
}

//Проверява emaila 1
function get_email(object $pdo, string $email)  
{
  $query = "SELECT     FROM users WHERE email = :email;";
  $stmt = $pdo->prepare($query); //sql injection
  $stmt->bindParam(":email", $email);
  $stmt->execute(); 

  $result = $stmt->fetch(PDO::FETCH_ASSOC); //featch взима само една част от датабазата // взима първия нов резултат 
  return $result;
}

//Въвеждане на стойностите
function set_user(object $pdo, string $pwd, string $username, string $email) {

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query); //sql injection
  
    //криене на парола в базатаданни
    $options = [
       'cost' => 12
    ];

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);


    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd",  $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute(); 

}