<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style.css">
	<!--Fontawesome cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	

</head>

<body>



	<div class="container">
		<div class="row ">

			<form action="login.php" method="post">
				<h2>LOGIN</h2>
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>

				<label>User Name</label>
				<div class="field">
					<input class="ms-2 " type="text" name="uname" placeholder="User Name">
					<i class="fa-solid fa-user  "></i>
					<br>
				</div>

				<label>Email</label>
				<div class="field">
					<input class="ms-2" type="email" name="email" placeholder="Email Address" >
					<i class="fa-solid fa-envelope"></i>
					<br>
				</div>

				<label>Password</label>
				<div class="field">
					<input class="ms-2 " type="password" name="password" placeholder="Password">
					<i class="fa-solid fa-lock "></i>
					<br>
				</div>

				<button type="submit">Login</button>
				<a href="signup.php" class="ca ">Create an account</a>
			</form>

		</div>

	</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>