<?php include("php/db.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>

    <div class="container">
        <div class="box form-box">
            
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];

                //verifying the unique email

                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {

                    echo "
                      <div class='message'> 
                      <p>This email is used, Try another One Please!</p>
                      </div>";

                    echo "<a href='register.php'><button class='btn'>Go Back</button>";
                } else {

                    mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES ('$username','$email','$age','$password')") or die("Error Occured");

                    echo "
                     <div class='message'> 
                     <p>Registration successfully!</p>
                      </div>";

                    echo "<a href='login.php'><button class='btn'>Login Now</button>";
                }
            } else {
            ?>

            <header>Register</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field ">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>

            </form>
        </div>
        <?php } ?>
    </div>
</body>

</html>