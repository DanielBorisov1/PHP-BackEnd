<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <section id="login">


        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h3 class="text-center  pt-4 pb-2">Login</h3>
                </div>


                <form action="includes/login.inc.php" method="post" class="text-center">
                    <div class="col-12">
                        <input type="text" name="username" placeholder="Username" class="mb-3">
                    </div>

                    <div class="col-12">
                        <input type="password" name="pwd" placeholder="Password" class="mb-3">
                    </div>

                    <a href="" class="btn btn-brand">Login</a>

                </form>
            </div>
    </section>




    <section id="signup">
        <div class="container"> 
            <div class="row  text-center">


                <div class="col-12">
                    <h3 class="text-center  pt-4 pb-2">Signup</h3>
                </div>


                <form action="includes/signup.inc.php" method="post" class="text-center">
                    <div class="col-12">
                        <input type="text" name="username" placeholder="Username" class="mb-3">
                    </div>

                    <div class="col-12">
                        <input type="password" name="pwd" placeholder="Password" class="mb-3">
                    </div>

                    <div class="col-12">
                        <input type="text" name="email" placeholder="E-Mail" class="mb-3">
                    </div>

                    <button class="btn btn-brand">Signup</button>

                </form>


            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                //отиваме към signup_view
                check_signup_errors();
                ?>

            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>