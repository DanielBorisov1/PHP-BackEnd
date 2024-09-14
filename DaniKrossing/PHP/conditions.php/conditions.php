<?php

//$result = 1 > 3; //true

$first_name = 'Jeremy';
$last_name = 'McPeak';

//&& - и
//|| - или       
// ! -обръща стойността от true- прави fause и от false прави true                             
if ($first_name == 'Jeremy' || $last_name == 'McPeak') {        // първо ще се генерира първото защото всичко е true                                                          
    echo 'The first condition is true';
} else if ($first_name == 'Jeremy' && $last_name == 'McPeak') {    //ако имаме false в първия if ще се генерира true от втория else if 
    echo 'The second condition is true';
} else {                                                      //но ако и втория if е грешен ще ни върне съобщението написано от нас за грешка 
    echo 'The condition are false';
}