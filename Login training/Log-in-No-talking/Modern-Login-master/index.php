<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>


    <!--Create account-->
    <div class="container" id="container">
        <div class="form-container sign-up">

            <form action="signup-check.php" method="post">
                <h1 class="dola">Create Account</h1>

                <!--PHP errors-->
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>

                <!--NAME-->
                <?php if (isset($_GET['name'])) { ?>

                    <input type="text" name="name" placeholder=" Name" value="<?php echo $_GET['name']; ?>">

                <?php } else { ?>

                    <input type="text" name="name" placeholder=" Name">

                <?php } ?>

                <!--USERNAME-->
                <?php if (isset($_GET['uname'])) { ?>

                    <input type="text" name="uname" placeholder=" User Name" value="<?php echo $_GET['uname']; ?>">

                <?php } else { ?>

                    <input type="text" name="uname" placeholder="User Name">

                <?php } ?>

                <!--EMAIL-->
                <?php if (isset($_GET['email'])) { ?>

                    <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>">

                <?php } else { ?>

                    <input type="text" name="email" placeholder="Email">

                <?php } ?>

                <!---Password-->
                <input type="password" name="password" placeholder="Password">
                <!--RE-PASSWORD-->
                <input type="password" name="re_password" placeholder="Re_Password">

                <button type="submit">Create</button>
            </form>
        </div>

        <!--Sign in--->
        <div class="form-container sign-in">

            <form action="login.php" method="post">
                <h1 class="dola">Sign In</h1>

                <!--PHP errors-->
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>


                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span class="forget-pass">or use your email password</span>
                <!--Remember me name-->
                <input class="ms-2 " type="text" name="uname" placeholder="User Name" 
                    value="<?php if (!empty($uname)) {
                                echo $uname;
                            } elseif (isset($_COOKIE["remember_uname"])) {
                                echo $_COOKIE["remember_uname"];
                            } ?>" />
                 <!--required data-parsley-trigger="keyup" -->
                <input class="ms-2 " type="password" name="password" placeholder="Password"  />

                <!--Remember me checkbox-->
                <label for="rememberMe" class="remember-me">
                    <input type="checkbox" name="rememberMe" id="remember-checkbox"
                        <?php if (!empty($remember)) { ?> checked <?php } elseif (isset($_COOKIE["rememberMe"])) { ?> cheked <?php  } ?>>
                    Remember me
                </label>

                <a href="#" class="forget-pass">Forget Your Password?</a>
                <button type="submit">Sign in</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>