<!DOCTYPE html>
<html>

<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
	<form action="signup-check.php" method="post">
		<h2>SIGN UP</h2>


		<!--PHP-->
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>


		<?php if (isset($_GET['success'])) { ?>
			<p class="success"><?php echo $_GET['success']; ?></p>
		<?php } ?>




		<label>E-mail</label>
		<?php if (isset($_GET['email'])) { ?>
			<input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
		<?php } else { ?>


			<input type="text" name="email" placeholder="Email"><br>

		<?php } ?>




		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<label>Re Password</label>
		<input type="password" name="re_password" placeholder="Re_Password"><br>


		
		<select name="user_type" class="justify-content-center aling-items-center">
			<option value="user">user</option>
			<option value="admin">admin</option>
		</select>


		<button type="submit">Sing up</button>
		<a href="index.php" class="ca">Alredy have an account?</a>
	</form>
</body>

</html>