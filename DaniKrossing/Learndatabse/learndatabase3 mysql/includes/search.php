<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userSearch = $_POST["usersearch"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch; ";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {

        die("Query failed: " . $e->getMessage());
    }
} else {

    header("Location: ../index.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <h3 class="intro-text text-center pt-4 pb-2">Search results</h3>

                <?php

                if (empty($results)) {

                   $url = "http://localhost:3000/index.php"; //връща ме към началната страница 

                    echo "<div>";
                    echo "<p>There were no results</p>";
                    echo "  <a href= '$url' target='_blank' class='btn btn-brand'> Начална страница </a> ";
                    echo "</div>";

                } else {
                    foreach ($results as $row) {      //Резултата го изпращаме към друг файл че да можем да го стилизираме
                        require_once "styling.inc.php";
                       
                    }
                }

                ?>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>