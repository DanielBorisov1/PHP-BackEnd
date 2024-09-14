<?php
session_start();
include "db_conn.php";


if (
	isset($_POST['uname']) && isset($_POST['password'])
	&& isset($_POST['name']) && isset($_POST['email']) && isset($_POST['re_password'])
) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	//ERRORS
	$uname = validate($_POST['uname']);

	$email = validate($_POST['email']);

	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);

	$name = validate($_POST['name']);


	$user_data = 'uname' . $uname . '&name=' . $name;


	if (empty($name . $uname . $pass . $email . $re_pass)) {
		//Fill in Create Account blank
		header("Location: index.php?error= Попълнете празните полета Create Account");
		exit();
	}

	else if (empty($name)) {
		//Name is required
		header("Location: index.php?error=Името е задължително&$user_data");
		exit();
	}

	else if (empty($uname)) {
		//User Name is required
		header("Location: index.php?error=Изисква се потребителско име&$user_data");
		exit();
	} 

	else if (empty($email)) {
		//Email is required
		header("Location: index.php?error=Изисква се имейл&$user_data");
		exit();
	} 
	
	else if (empty($pass)) {
		//Password is required
		header("Location: index.php?error=Изисква се парола&$user_data");
		exit();
	} 
	
	else if (strlen($_POST["password"]) < 8) {
		//Password must be at least 8 characters
		header("Location: index.php?error=Паролата трябва да е поне 8 знака&$user_data");
		exit();
	} 
	
	else if (! preg_match("/[a-z]/i", $_POST["password"])) {
		//Password must contain at least one letter
		header("Location: index.php?error=Паролата трябва да съдържа поне една буква&$user_data");
		exit();
	} 

	else if (! preg_match("/[0-9]/", $_POST["password"])) {
		//Password must contain at least one number
		header("Location: index.php?error=Паролата трябва да съдържа поне едно число&$user_data");
		exit();
	} 
	
	else if (empty($re_pass)) {
		//Re Password is required
		header("Location: index.php?error=Изисква се потвърждение на паролата&$user_data");
		exit();
	} 
	
	//това е за ако паролите не си съответстват да дава грешка
	else if ($pass !== $re_pass) {
		//The confirmation password does not match
		header("Location: index.php?error=Паролата за потвърждение не съвпада&$user_data");
		exit();
	} else {


		//	$pass= password_hash($_POST['password'], PASSWORD_DEFAULT);
		//hashing the password
		$pass = md5($pass);

		$sql = "SELECT * FROM users1 WHERE user_name='$uname' ";

		$sql2 = "SELECT * FROM users1 WHERE email='$email' ";

		$result = mysqli_query($conn, $sql);

		$result2 = mysqli_query($conn, $sql2);


		//The username is taken try another
		if (mysqli_num_rows($result) > 0) {
           //The username is taken try another
			header("Location: index.php?error=Потребителското име е заето, опитайте с друго&$user_data");
			exit();
		}
		//The email is taken try another
		else if (mysqli_num_rows($result2) > 0) {
            //The email is taken try another
			header("Location: index.php?error=Имейлът е зает, опитайте друг&$user_data");
			exit();
		} else {
			$sql2 = "INSERT INTO users1(user_name, email, password, name) VALUES('$uname', '$email', '$pass', '$name')";
			$result2 = mysqli_query($conn, $sql2);

			if ($result2) {
                //Your account has been created successfully
				header("Location: index.php?success= Вашият акаунт е създаден успешно");
				exit();
			} else {
                //unknown error occurred
				header("Location: index.php?error=Възникна неизвестна грешка&$user_data");
				exit();
			}
		}
	}
} else {
	header("Location: index.php");
	exit();
}
