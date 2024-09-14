<?php


$pageTitle = "Форма";
include '../adressbook/includes/header.php';


//масив
//Приятели; Бивши; Бъдещи; Колеги
$groups = array(1 => 'Храни', 2 => 'Транспорт', 3 => 'Забавления', 4 => 'Други');


//trim маха всички излишни интервали отляво и отдясно
if ($_POST) {

    $username=trim($_POST['username']);
    $username=str_replace('!','', $username);//премахва символа ! ако е поставен в usernama
    
    //ако види някъде запетая да го направи в точка 
    $sum= floatval(str_replace(',', '.',$_POST['sum']));

    $selectedGroup = (int)$_POST['group']; //1
    $error=false;

    //Проверяваме текста който сме въвели дали е по-малко от 4 
    if (strlen($username) < 4) {
        echo  '<p>Името е прекалено късо</p>';
        $error = true;
    }


    if ($sum<0) {
        echo  '<p>Невалиден разход</p>';
        $error = true;
    }

    //резултата който го изпраща към data.txt
    if (!$error) {   
        $result=$username.'!'.$sum.'!'.$selectedGroup. "\n";
       
       if ( file_put_contents('data.txt', $result,FILE_APPEND)){

        echo 'Записа е успешен';
       }
    }
   
}

//показва масива echo '<pre>'.print_r($_POST, true). '</pre>';
?>



<div class=" justify-content-center text-center aling-items-center">

    <a href="index.php">Списък</a>

    <!--POST!!! изпраща информацията от текстбоксовете-->
    <form method="POST">

        <p>Име:<input type="text" class="ms-2 mt-2" name="username" /></p>
        <p>Сума:<input type="text" class="ms-2" name="sum" /></p>

        <select name="group"> <!--1-->

            <?php
            //Приятели; Бивши; Бъдещи; Колеги 
            foreach ($groups as $key => $value) {
                echo '<option value=" ' . $key . ' ">'  . $value . '</option>';
            }
            ?>

        </select>

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