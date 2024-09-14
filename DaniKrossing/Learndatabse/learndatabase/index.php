<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="syle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>





    <div class="container">
        <div class="row  text-center">

           
                <div class="col-12">
                    <h3 class="text-center  pt-4 pb-2">Register</h3>
                </div>


                <form action="includes/formhandler.inc.php" method="post" class="text-center">
                    <div class="col-12">
                        <input type="text" name="username" placeholder="Username" class="mb-3">
                    </div>

                    <div class="col-12">
                        <input type="password" name="pwd" placeholder="Password" class="mb-3">
                    </div>

                    <div class="col-12">
                        <input type="text" name="email" placeholder="E-Mail" class="mb-3">
                    </div>

                    <button>Regist</button>
                    
                </form>

    


        
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>