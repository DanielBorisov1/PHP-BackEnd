<?php
session_start();
include "db/db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {


	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


   
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$check_email = "SELECT * FROM users WHERE email = '$email'";
	$res = mysqli_query($conn, $check_email);
	$user_type = validate($_POST['user_type']);
	$pass = validate($_POST['password']);


	if (empty($email && $pass)) {
		header("Location: index.php?error=Попълнете бланката");
		exit();
	} else if (empty($email)) {
		header("Location: index.php?error=Email is required");
		exit();
	} else if (empty($pass)) {
		header("Location: index.php?error=Password is required");
		exit();
	} else {


		$pass = md5($pass);	//hashing the password
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['email'] == $email && $row['password'] === $pass && $row['role'] == 'admin') {

				$_SESSION['admin_name'] = $row['email'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['id'] = $row['id'];
				header('location: views/admin-form.php');
				exit();
			} 
			
			elseif ($row['role'] == 'user') {

				$_SESSION['admin_name'] = $row['email'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['id'] = $row['id'];
				header('location: views/user-view.php');
				exit();
			} 
			
			else {
				header("Location: index.php?error=Incorect User name or password");
				exit();
			}
		} 
		
		else {
			header("Location: index.php?error=Incorect User name or password");
			exit();
		}
	}
} 

else {
	header("Location: index.php");
	exit();
}
