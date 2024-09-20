<?php
session_start();

include "db_conn.php";



if (isset($_POST['uname']) && isset($_POST['password'])) {


	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	//REMEMBER ME
	if (isset($_POST['rememberMe'])) {
		$remember = $_POST['rememberMe'];
	}
	//REMEMBER ME-----

	//ERRORS
	if (empty($uname . $pass)) {
		//Fill in blank
		header("Location: index.php?error=Попълнете празните полета");
		exit();
	}

	if (empty($uname)) {
		//User Name is required
		header("Location: index.php?error=Изисква се потребителско име");
		exit();
	} 
	else if (empty($pass)) {
		//Password is required
		header("Location: index.php?error=Изисква се парола");
		exit();
	} 
	else {
		//hashing the password
		$pass = md5($pass);


		$sql = "SELECT * FROM users1 WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			//REMEMBER ME
			if (isset($_POST['rememberMe'])) { //if remember me is checked
				$remember = $_POST['rrememberMe'];
				setcookie("remember_uname", $uname, time() + 3600 * 24 * 365);
				setcookie("remember", $password, time() + 3600 * 24 * 365);
			} else {
				setcookie("remember_uname", "", time() - 36000);
				setcookie("rememberMe", $remember, time() + 3600 * 24 * 365);
			} //REMEMBER ME--------


			if ($row['user_name'] === $uname && $row['password'] === $pass) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: home.php");
				exit();
			} else {
				//Incorect User name or password
				header("Location: index.php?error=Неправилно потребителско име или парола");
				exit();
			}
		} else {
			//Incorect User name or password
			header("Location: index.php?error=Неправилно потребителско име или парола");
			exit();
		}
	}
} else {
	header("Location: index.php");
	exit();
}
