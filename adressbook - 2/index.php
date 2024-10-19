<?php

$pageTitle = "Списък";
include '../adressbook/includes/header.php';

error_reporting(E_ERROR | E_PARSE);


//масив
//Приятели; Бивши; Бъдещи; Колеги
$groups = array(1 => 'Храни', 2 => 'Транспорт', 3 => 'Забавления', 4 => 'Други');



?>


<a href="form.php" class="d-flex pt-4 justify-content-center text-center aling-items-center "> добави нов контакт</a>



<form method="get">

    <div class="d-flex pt-4 justify-content-center text-center aling-items-center">
        <select name="group "> <!--1-->
            <option value="0">Всички</option>

            <?php
            //Приятели; Бивши; Бъдещи; Колеги 
            foreach ($groups as $key => $value) {
                echo '<option value=" ' . $key . ' ">'  . $value . '</option>';
            }
            ?>

        </select>
        <input type="submit" value="Филтрирай" class="" />
    </div>
</form>






<div class=" pt-5 justify-content-center text-center aling-items-center d-flex">
    <table class="border">
        <tr>
            <td class="border">Име</td>
            <td class="border">Сума</td>
            <td class="border">Група</td>
        </tr>


        <?php
        //проверяваме дали даден файл съществува
        if (file_exists('data.txt')) {

            $result = file('data.txt');
            $totslSum = 0;

            //всяка една информация ще бъде един нов ред на таблицата
            foreach ($result as $value) {
                $columns = explode('!', $value);



                /*    if ($_GET['group'] > 0 && (int)$_GET['group'] != (int) $columns[2]) {
                    continue;
                }*/


                //когато get параметъра не е равен на текущия ред пишем continue




                //Гледаме масива echo'<pre>'.print_r( $columns, true ).'</pre';


                $totslSum += $columns[1];
                // информацията в таблицата
                echo '<tr>
                <td class="border">' . $columns[0] . '</td>
                <td class="border">' . number_format($columns[1], 2, '.', '') . '</td>
                <td class="border">' . $groups[trim($columns[2])] . '</td>
                </tr>';        //.$groups [trim($columns[2])] показва ни се групата както е записана а не със стойности (1;2;3)



            }


            //.number_format($totslSum, 2,'.','' вместо 13.8 го прави на 13.80
            echo '<tr>  
            <td class="border"></td>
       
            <td class="border">' . number_format($totslSum, 2, '.', '') . '</td> 
    
            <td class="border"></td>

            </tr>';
        }
        ?>


    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<?php
include '../adressbook/includes/footer.php';
?>