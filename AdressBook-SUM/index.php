<?php

$pageTitle = "Списък";
include '../adressbook/includes/header.php';


?>


<<<<<<< HEAD
<a href="form.php" class="d-flex pt-4 justify-content-center text-center aling-items-center "> добави нов контакт</a>
<div class=" pt-5 justify-content-center text-center aling-items-center d-flex">

    <table class="border">
        <tr>
            <td class="border">Име</td>
            <td class="border">Телефон</td>
=======
<a href="form.php" class="d-flex pt-4 justify-content-center text-center aling-items-center"> добави нов контакт</a>

<form method="GET">
    <div class="d-flex justify-content-center mt-5">
        <select name="group">

            <option value="0">Всички</option>

            <?php

            $groups = array(1 => 'Храни', 2 => 'Транспорт', 3 => 'Забавления', 4 => 'Други');

            foreach ($groups as $key => $value) {
                echo '<option';

                   //проберка select-натото си остава 
                if (isset($_GET['group']) && (int)$_GET['group']==$key){
                     echo 'selected';
                }
                
                
              echo ' value=" ' . $key . ' ">'  . $value . '</option>';
            }

            ?>
        </select>
        <input type="submit" value="филтрирай" />
    </div>
</form>




<div class=" pt-2 justify-content-center text-center aling-items-center d-flex">
    <table class="border">
        <tr>
            <td class="border">Име</td>
            <td class="border">Сума</td>
>>>>>>> 28671fee2fd8ffb9c72e0414895b26311e540e9d
            <td class="border">Група</td>
        </tr>


        <?php
        //проверяваме дали даден файл съществува
        if (file_exists('data.txt')) {
            //чете файла
            $result = file('data.txt');
<<<<<<< HEAD
=======
            $totalSum = 0;
>>>>>>> 28671fee2fd8ffb9c72e0414895b26311e540e9d

            //всяка една информация ще бъде един нов ред на таблицата
            foreach ($result as $value) {

<<<<<<< HEAD
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


=======
                $columns = explode('!', $value);
            

                if (isset($_GET['group']) && ($_GET['group'])>0 && (int)$_GET['group']!=(int)$columns[2]) {
                    continue; //презкочи интерацията
                }

                $totalSum += $columns[1];

                //Гледаме масива echo'<pre>'.print_r( $columns, true ).'</pre';
                //number_format
                echo '<tr>
                <td class="border">' . $columns[0] . '</td>
                <td class="border">' . number_format($columns[1], 2, '.', '') . '</td> 
                <td class="border">' . $groups[trim($columns[2])] . '</td>
                </tr>';
            }
            echo '<tr>

          <td class="border"></td>
          <td class="border">' . number_format($totalSum, 2, '.', '') . '</td>
          <td class="border"></td>
          
          </tr>';
        }
        ?>
>>>>>>> 28671fee2fd8ffb9c72e0414895b26311e540e9d
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<?php
include '../adressbook/includes/footer.php';
?>