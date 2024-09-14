<?php

session_start();
$title = 'get Input';

require_once('./../inc/config.php');
require_once('./../inc/functions.inc.php');

if (is_user_authenticated()) {
    redirect('admin.php');
    die();
}

//Email error
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password']; // TODO: validate this

    //compare with data store
    if (authenticate_user($email, $password)) {

        $_SESSION['email'] = $email;

        redirect('admin.php');
        die();
    } else {
        $status = "The provided crendetials didn't not work";
    }


    if ($email == false) {
        $status = 'Please enter a valid email adress';
    }
}

/*if (isset($_POST['login'])) {
    output($_POST);
}*/

include('./../inc/header.inc.php');

?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Post input</h1>
        </div>
    </div>

    <div class="row ">
        <form action="" method="POST">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" name="email" id="email" />
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" name="password" id="password" />
                </div>
            </div>


            <div class="form-group mt-2">
                <input type="submit" value="login" name="Login" />
            </div>
        </form>
    </div>

    <div class="row">
        <?php
        if (isset($status)) {
            echo $status;
        }



        ?>
    </div>
</div>

<?php include('./../inc/footer.inc.php'); ?>