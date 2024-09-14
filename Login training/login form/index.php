<?php

include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".//style.css">
</head>

<body>

    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label for="">Username:</label>
            <input type="text" id="user" name="user"> </br></br>
            <label for="">Password</label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit" />
        </form>
    </div>


  <!--  <script>
        function isvalid() {
            var user =document.form.user.value;
            var pass =document.form.pass.value;
            if(user.lenght=="" && pass.lenght=="") {
                alert("Username and password field is empty!!!");
                return false
            }

            else{

                if(user.lenght=="" ) {
                    alert("Username is empty!!!");
                  return false
                }


                if(pass.lenght=="" ) {
                    alert("Password is empty!!!");
                  return false
                }

            }
               
            

        }
    </script> -->

</body>

</html>