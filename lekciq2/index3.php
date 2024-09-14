<?php

$foo='1.5124ddsadas'; //когато е 0 ще бъде false даже да е и променлива '0'
$foz='15.124ddsadas';




//какъв е типът
//int губи информация към foo=1.5 става 1
var_dump((float)$foo);
echo '<br>';
var_dump((int)$foz);