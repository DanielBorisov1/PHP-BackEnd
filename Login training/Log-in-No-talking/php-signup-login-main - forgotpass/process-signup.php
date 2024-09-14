<?php



if (empty($_POST["name"])) {
    header("Location: signup.php?error=Name is required");
    exit();
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    header("Location: signup.php?error=Valid email is required");
    exit();
}

if (empty($_POST["password"])) {
    header("Location: signup.php?error=Password is required");
    exit();
}

if (strlen($_POST["password"]) < 8) {
    header("Location: signup.php?error=Password must be at least 8 characters");
    exit();
    
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    header("Location: signup.php?error=Password must contain at least one letter");
    exit();
 
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    header("Location: signup.php?error=Password must contain at least one number");
    exit();
  
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    header("Location: signup.php?error=Passwords must match");
    exit();
  
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users1 (user_name, email, password)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }

  
}








