<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/search.css">
</head>

<body>




    <section class="section-padding " id="results">
        <div class="container">
            <div class="row pb-5 justify-content-center text-center ">
                <?php

                $url = "http://localhost:3000/index.php"; //връща ме към началната страница 
                echo "  <a href= '$url' target='_blank' class='btn btn-brand'> Начална страница </a> ";

                ?>
            </div>
            <div class="row justify-content-center text-center ">

                <div class="col-md-4 ">
                    <div class="shadow-on-hover custom-card p-3">
                        <h2>Подател</h2>
                        <?php
                        echo "<h5>" . htmlspecialchars($row["username"]) . "</h5>";
                        ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow-on-hover custom-card p-3">
                        <h2>Съобщение</h2>
                        <?php
                        echo "<h5>" . htmlspecialchars($row["comment_text"]) . "</h5>";
                        ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow-on-hover custom-card p-3">
                        <h2>Дата и час </h2>
                        <?php
                        echo "<h5>" . htmlspecialchars($row["created_at"]) . "</h5>";
                        ?>
                    </div>

                </div>
            </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>