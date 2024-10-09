<?php

$pageTitle = "Списък";
include '../adressbook/includes/header.php';


?>


<a href="form.php" class="d-flex pt-4 justify-content-center text-center aling-items-center "> добави нов контакт</a>
<div class=" pt-5 justify-content-center text-center aling-items-center d-flex">

    <table class="border">
        <tr>
            <td class="border">Име</td>
            <td class="border">Телефон</td>
            <td class="border">Група</td>
        </tr>


        <?php
        //проверяваме дали даден файл съществува
        if (file_exists('data.txt')) {
            //чете файла
            $result = file('data.txt');

            //всяка една информация ще бъде един нов ред на таблицата
            foreach ($result as $value) {

                //Разбиване на файловете по редовете на таблицата
                $columns = explode('!', $value); //value държи цялата информация

               //Гледаме масива echo'<pre>'.print_r( $columns, true ).'</pre';

                // информацията в таблицата
                echo '<tr>
                <td class="border">' .$columns[0] . '</td>
                <td class="border">' .$columns[1] . '</td>
                <td class="border">' .$groups [trim($columns[2])] . '</td>
                </tr>';        //.$groups [trim($columns[2])] показва ни се групата както е записана а не със стойности (1;2;3)


             
            }
        }
        ?>


    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<?php
include '../adressbook/includes/footer.php';
?>