<?php
require("db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/forgot-1.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">


            <?php


        

            // Check if 'key' and 'token' parameters are present in the URL query string
            if (isset($_GET['key']) && isset($_GET['token'])) {



                $email = $_GET['key'];
                $token = $_GET['token'];

          



                // Prepare the SQL statement
                $stmt = $conn->prepare("SELECT * FROM `users1` WHERE `reset_token_hash`=? AND `email`=?");

                // Bind parameters
                $stmt->bind_param("ss", $token, $email);

                // Execute the statement
                $stmt->execute();

                // Get the result
                $result = $stmt->get_result();

                $curDate = date("Y-m-d H:i:s");

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Check if the token has not expired
                    if ($row['reset_token_expires_at'] >= $curDate) {


            ?>



                        <form action="update-forget-password.php" method="post">

                            <!--PHP errors-->
                            <?php if (isset($_GET['errorreset'])) { ?>
                                <p class="error"><?php echo $_GET['errorreset']; ?></p>
                            <?php } ?>

                            <!--PHP success-->
                            <?php if (isset($_GET['successreset'])) { ?>
                                <p class="success"><?php echo $_GET['successreset']; ?></p>
                            <?php } ?>



                            <h2 class="dola">Reset Password </h2>

                            <input type="hidden" name="user_email" value="<?php echo $email; ?>">
                            <input type="hidden" name="reset_token_hash" value="<?php echo $token; ?>">


                            <input type="password" placeholder="Enter password" id="password" name="passwordreset" required>


                            <input type="password" placeholder="Confirm password" id="password-confirm" name="passwordconf" required>

                            <button type="submit">Submit</button>

                        </form>

            <?php
                    }


                } else {
                    echo "<div style='success_message;'>This reset link has expired</div>";
                }
            }
            ?>
        </div>
    </div>





</body>

</html>