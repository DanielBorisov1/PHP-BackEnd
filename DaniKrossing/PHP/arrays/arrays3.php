<?php

$fruits =  ["Apple", "Banana", "Cherry"];

$fruits[] = "Orange";


array_splice($fruits, 0, 1);

//unset($fruits[1]);

echo $fruits[1];