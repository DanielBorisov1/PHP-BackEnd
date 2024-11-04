<?php
include '../db/db_conn.php';
session_start();


$pageTitle = "Форма-Admin";


if (!isset($_SESSION['admin_name'])) {
    header('location: index.php');
}


if (isset($_POST['add_product'])) {

    $product_Author = $_POST['Author'];
    $product_Title = $_POST['Title'];


    if (empty($product_Author) || empty($product_Title)) {
        $message[] = 'Моля попълнете празните полета!';
    } else {
        $insert = "INSERT INTO books (author, title) VALUES ('$product_Author', '$product_Title') ";
        $upload = mysqli_query($conn, $insert);
       

        if($upload){
            header('Location: admin-form.php');
            $message[] = 'Успешно изпратихте!';
            exit();
        }
    }
}

//delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");
    header('location:admin-form.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>


    <!--Form-->
    <div class="container justify-conrent-center text-center aling-items-center">
        <div class="admin-product-form-container">
            <h1 class="pt-5">Admin page</h1>

            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<span class="message">' . $message . '</span>';
                    }
                }
                ?>
                <h3>Добавете Книга</h3>
                <input type="text" placeholder="Автор:" class="ms-2 mt-2" name="Author" />
                <input type="text" placeholder="Заглавие:" class="ms-2" name="Title" />


                <div class="text-center pt-3">
                    <input type="submit" name="add_product" value="Добави">
                </div>

            </form>
        </div>
    </div>




    <!--Table-->
    <div class="container ">
        <?php
        $select = mysqli_query($conn, "SELECT * FROM books");
        ?>

        <table class="product-display-table text-center justify-content-center aling-items-center">
            <thead>
                <tr>
                    <td class="border pe-5 ps-5">Автор</td>
                    <td class="border pe-5 ps-5">Произведение</td>
                    <td class="border pe-5 ps-5">Статус</td>
                    <td class="border pe-5 ps-5">Промени</td>
                </tr>
            </thead>

            <?php
            while ($row = mysqli_fetch_assoc($select)) {
            ?>

                <tr>
                    <td class="border pe-5 ps-5 p-3"><?php echo $row['author']; ?></td>
                    <td class="border pe-5 ps-5"><?php echo $row['title']; ?></td>
                    <td class="border pe-5 ps-5 pb-2"><?php echo $row['status']; ?></td>
                    <td class="border pe-5 ps-5   mt-2 btn btpn-brand">
                        <a href="admin-update.php?edit=<?php echo $row['id']; ?>" class="text-dark"><i class="fas fa-edit"></i>edit</a>
                    </td>

                    <td class="border pe-5 ps-5 ms-2 mt-2 btn btn-brand">
                        <a href="admin-form.php?delete=<?php echo $row['id']; ?>" class="text-dark"><i class="fas fa-trash"></i>delete</a>
                    </td>
                </tr>

            <?php }; ?>




        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>