<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">

            <form action="post-calculate-price.php" method="post">
                <label for="">quantity:</label><br>
                <input type="text" name="quantity">
                <input type="submit" value-="total">
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
   $item = "pizza";
   $price = 5.99;
   $_POST["quantity"];
   $quantity = $_POST["quantity"];
   $total = null;

   $total = $quantity * $price;


   echo "You have ordered {$quantity} x {$item}/s <br>";
   echo"Your total is: \${$total}";
?>