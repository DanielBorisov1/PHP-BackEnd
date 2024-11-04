<?php
include('../db/db_conn.php');

session_start();
$pageTitle = "Редакция";


$id = $_GET['edit'];

if (isset($_POST['update_product'])) {

    $product_Author = $_POST['Author'];
    $product_Title = $_POST['Title'];


    if (empty($product_Author) || empty($product_Title)) {
        $message[] = 'Моля попълнете празните полета!';
    } else {
        $update = "UPDATE books SET author= '$product_Author', title = '$product_Title' WHERE id= '$id' ";
        $upload = mysqli_query($conn, $update);
        if ($upload) {

            $message[] = 'Успешно редактирахте!';
        }
    }
}

//delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");
    header('location:admin-form.php');
}





/*if (!isset($_SESSION['admin_name'])) {
    header('location: index.php');
}*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

</head>

<body>





    <div class="container justify-conrent-center text-center aling-items-center">
        <div class="admin-product-form-container">

            <?php
            $select = mysqli_query($conn, "SELECT * FROM books WHERE id= $id");
            while ($row = mysqli_fetch_assoc($select)) {
            ?>


                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <?php
                    if (isset($message)) {
                        foreach ($message as $message) {
                            echo '<span class="message">' . $message . '</span>';
                        }
                    }
                    ?>
                    <h3>Редактирай Книга</h3>
                    <input type="text" placeholder="Автор:" value="<?php $row['title'] ?>" class="ms-2 mt-2" name="Author" />
                    <input type="text" placeholder="Заглавие:" value="<?php $row['author'] ?>" class="ms-2" name="Title" />

                    <div class="text-center pt-3">
                        <input type="submit" name="update_product" value="Редактирай продукт">
                        <a href="admin-form.php" class="button">go back</a>
                    </div>

                </form>

            <?php }; ?>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>