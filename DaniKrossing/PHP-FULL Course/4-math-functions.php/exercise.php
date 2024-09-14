<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content center aling-items-center d-flex text-center">
            <form action="exercise.php" method="post" class="pt-3">
                <label for="">radius:</label>
                <input type="text" name="radius"> <br>
                <input type="submit" value="calculate" class="mt-1">

            </form>


        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">

        <?php

        $radius = $_POST["radius"];
        $circumference = null;
        $area = null;

        $circumference = 2 * pi() * $radius;
        $circumference = round($circumference, 2); //обикновено кръглата функция ще закръгли число до най-близкото цяло число, за да закръгли до дадена цифра, добавете запетая и след това поставете тази цифра

        //A formula
        $area = pi() * pow($radius, 2); //2 е стойността
        $area = round($area, 2);

        //V- formula
        $volume = 4/3 * pi() * pow($radius, 3);
        $volume = round($volume, 2);

        echo "Circumference = {$circumference}cm <br>";
        echo "Area= {$area}cm^2 <br>";
        echo "Volume = {$volume}cm^3 <br>";

        ?>
        <img src="./Screenshot_3.png" alt="">
        <img src="./Screenshot_1.png" alt="">
    </div>
</body>

</html>