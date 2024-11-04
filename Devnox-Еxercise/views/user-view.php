<?php

include('../db/db_conn.php');
session_start();

if (!isset($_SESSION['admin_name'])) {
     header('location: index.php');
}

$select = mysqli_query($conn, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <title>Document</title>
</head>

<body>


     <div class="container pt-5 d-flex text-center justify-content-center aling-items-center">

          <div class="content">
               <table class="product-display-table">

                    <select name="group">
                         <option value="0">Всички</option>
                         <?php

                         foreach ($row  as $key => $value) {
                              echo '<option';

                              if (isset($_GET['group']) && (int)$_GET['group'] == $key) {
                                   echo ' selected ';
                              }


                              echo ' value=" ' . $key . ' ">'  . $value .
                                   '</option>';
                         }

                         ?>
                    </select>

                    <!--Table-->
                    <input type="submit" value="Филтрирай" class="" />
                    <thead>
                         <tr>
                              <td class="border pe-5 ps-5">Автор</td>
                              <td class="border pe-5 ps-5">Произведение</td>
                              <td class="border pe-5 ps-5">Статус</td>

                         </tr>
                    </thead>

                    <?php
                    while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                         <tr>
                              <td class="border pe-5 ps-5 p-3"><?php echo $row['author']; ?></td>
                              <td class="border pe-5 ps-5"><?php echo $row['title']; ?></td>
                              <td class="border pe-5 ps-5 pb-2"><?php echo $row['status']; ?></td>
                         </tr>

                    <?php }; ?>

               </table>
          </div>
     </div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>