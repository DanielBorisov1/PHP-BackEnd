<?php

//Лоша практика при масиви и референции


$foo=1;
$bar=2;
$myArray=array(&$foo,&$bar);

$foo=8;