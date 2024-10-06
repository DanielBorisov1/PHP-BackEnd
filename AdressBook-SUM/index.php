<?php

$pageTitle = "Списък";
include '../adressbook/includes/header.php';


?>


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
            <td class="border">Група</td>
        </tr>


        <?php
        //проверяваме дали даден файл съществува
        if (file_exists('data.txt')) {
            //чете файла
            $result = file('data.txt');
            $totalSum = 0;

            //всяка една информация ще бъде един нов ред на таблицата
            foreach ($result as $value) {

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
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<?php
include '../adressbook/includes/footer.php';
?>