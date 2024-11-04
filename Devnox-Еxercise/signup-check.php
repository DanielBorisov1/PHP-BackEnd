<?php
session_start();
include "db/db_conn.php";

if (
	isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])
) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}





	$email = validate($_POST['email']);

	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);

	$user_type = validate($_POST['user_type']);







	if (empty($email && $pass && $re_pass)) {
		header("Location: signup.php?error=Попълнете бланката");
		exit();
	}



	if (empty($email)) {
		header("Location: signup.php?error= Изисква се имейл ");
		exit();
	} else if (empty($pass)) {
		header("Location: signup.php?error=Password is required");
		exit();
	} else if (empty($re_pass)) {
		header("Location: signup.php?error=Re Password is required");
		exit();
	}



	//това е за ако паролите не си съответстват да дава грешка
	else if ($pass !== $re_pass) {

		header("Location: signup.php?error=The confirmation password does not match ");
		exit();
	} else {

		//hashing the password
		$pass = md5($pass);


		$sql2 = "SELECT * FROM users WHERE email='$email' ";



		$result2 = mysqli_query($conn, $sql2);





		//The email is taken try another
		if (mysqli_num_rows($result2) > 0) {

			header("Location: signup.php?error=The email is taken try another");
			exit();
		} else {
			$sql2 = "INSERT INTO users(email, password, role) VALUES( '$email', '$pass', '$user_type')";
			$result2 = mysqli_query($conn, $sql2);

			if ($result2) {

				header("Location: signup.php?success= Your account has been created successfully");
				exit();

			} else {

				header("Location: signup.php?error=unknown error occurred");
				exit();
			}
		}


	




	}
} else {
	header("Location: signup.php");
	exit();
}
