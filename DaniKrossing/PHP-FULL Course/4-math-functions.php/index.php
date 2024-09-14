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
            <form action="index.php" method="post" class="pt-4">
                <label for="">x:</label>
                <input type="text" name="x"> <br>

                <label for="">y:</label>
                <input type="text" name="y" class="mt-2"><br>

                <label for="">z:</label>
                <input type="text" name="z" class="mt-2">

                <input type="submit" value="total">

            </form>

            <?php

            $x = $_POST["x"];
            $y = $_POST["y"];
            $z = $_POST["z"];
            $total = null;


            // $total = abs($x); без отрицателни
            //$total = round($x); закръгля
            //$total = floor($x); точна цифра
            // $total = ceil($x); закръгля на следващото число без даже да са близко
            // $total = sqrt($x); 144 = 12
            // $total = pow($x, $y); стойноста си по стойноста си
            // $total = max($x, $y, $z); показва най-високата от трите стойности
            // $total = min($x, $y, $z); показва най-ниската стойност
            // $total = pi(); ПИ
           // $total = rand(1, 6); генерира число на произвола между 1-6

            echo $total;

            ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>