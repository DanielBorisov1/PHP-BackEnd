<?php


$pageTitle = "Форма";
include '../adressbook/includes/header.php';

//trim маха всички излишни интервали отляво и отдясно
if ($_POST) {

<<<<<<< HEAD
    $username=trim($_POST['username']);
    $username=str_replace('!','', $username);//премахва символа ! ако е поставен в usernama
    $phone = trim($_POST['phone']);
    $phone=str_replace('!','', $phone);//премахва символа ! ако е поставен в phone
    $selectedGroup = (int)$_POST['group']; //1
    $error=false;
=======
    $username = trim($_POST['username']);
    $username = str_replace('!', '', $username); //премахва символа ! ако е поставен в usernama
    $sum = floatval(str_replace(',', '.', $_POST['sum'])); //str_replace заменя , на . 

    $selectedGroup = (int)$_POST['group'];
    $error = false;
>>>>>>> 28671fee2fd8ffb9c72e0414895b26311e540e9d

    //Проверяваме текста който сме въвели дали е по-малко от 4 
    if (strlen($username) < 4) {
        echo  '<p>Името е прекалено късо</p>';
        $error = true;
    }


<<<<<<< HEAD
    if (strlen($phone) < 6 || strlen($phone) > 12) {
        echo  '<p>Телефона е невалиден</p>';
        $error = true;
    }

    //резултата който го изпраща към data.txt
    if (!$error) {   
        $result=$username.'!'.$phone.'!'.$selectedGroup. "\n";
       
       if ( file_put_contents('data.txt', $result,FILE_APPEND)){

        echo 'Записа е успешен';
       }
    }
 
   
=======
    /*  if (strlen($phone) < 6 || strlen($phone) > 12) {
        echo  '<p>Телефона е невалиден</p>';
        $error = true;
    }*/

    if ($sum <= 0) {
        echo '<p>Невалиден разход</p>';
        $error = true;
    }


    if (!array_key_exists($selectedGroup, $groups)) {
        echo '<p>Невалидна група</p>';
        $error = true;
    }

    //резултата който го изпраща към data.txt
    if (!$error) {
        $result = $username . '!' . $sum . '!' . $selectedGroup . "\n";

        if (file_put_contents('data.txt', $result, FILE_APPEND)) {

            echo 'Записа е успешен';
        }
    }
>>>>>>> 28671fee2fd8ffb9c72e0414895b26311e540e9d
}


//показва масива echo '<pre>'.print_r($_POST, true). '</pre>';


?>



<div class=" justify-content-center text-center aling-items-center">

    <a href="index.php">Списък</a>

    <!--POST!!! изпраща информацията от текстбоксовете-->
    <form method="POST">

        <p>Име:<input type="text" class="ms-2 mt-2" name="username" /></p>
<<<<<<< HEAD
        <p>Телефон:<input type="text" class="ms-2" name="phone" /></p>

        <select name="group"> <!--1-->

            <?php
            //Приятели; Бивши; Бъдещи; Колеги 
            foreach ($groups as $key => $value) {
                echo '<option value=" ' . $key . ' ">'  . $value . '</option>';
            }
            ?>

        </select>

=======
        <p>Сума:<input type="text" class="ms-2" name="sum" /></p>
        <div>
            <select name="group"> <!--1-->

                <?php


                $groups = array(1 => 'Храни', 2 => 'Транспорт', 3 => 'Забавления', 4 => 'Други');
                foreach ($groups as $key => $value) {
                    echo '<option value=" ' . $key . ' ">'  . $value . '</option>';
                }
                ?>

            </select>
        </div>
>>>>>>> 28671fee2fd8ffb9c72e0414895b26311e540e9d
        <div class="text-center pt-3">
            <input type="submit" value="Добави">
        </div>

    </form>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Footer-->
<?php
include '../adressbook/includes/footer.php';

?>