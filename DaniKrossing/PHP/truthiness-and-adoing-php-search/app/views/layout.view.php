<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Fundamentals: <?= $view_bag['title']; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

</body>

</html>


<nav class="navbar navbar-expand-lg   fixed-top">
    <div class="container">
 <!--   <a href="#" class="navbar-brand">PHP Fundamentals: <?= $view_bag['title']; ?> </a>-->
    </div>
</nav>

     <?php
       require ("$name.view.php")
     ?>
      
</div>

<?php include('./../inc/footer.inc.php'); ?>