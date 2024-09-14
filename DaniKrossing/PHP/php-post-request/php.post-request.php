<?php

$title = 'get Input';


include('header.inc.php');
require_once('./../inc/functions.inc.php');

//Email error
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
 
  
  if($email == false) {
    $status = 'Please enter a valid email adress';
  }
}

/*

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 output($_POST);
}

*/

/*if (isset($_POST['login'])) {
    output($_POST);
}*/

?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Post request</h1>
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


           output($status);


           
        ?>
    </div>

    <?php include('footer.inc.php'); ?>