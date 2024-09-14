<?php
//associative array = An array made of key => value paris

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

//$capitals["USA"] = "Las Vegas";
//$capitals["China"] = "Beihing";
//array_pop($capitals); remove last element
//array_shift($capitals); remove first element

/*$keys = array_keys($capitals); only key visit
foreach($keys as $key) {
    echo"{$key} <br>";
}*/

/*$values = array_values($capitals); only values visit
foreach($values as $value){
    echo "{$value} <br>";
}*/

/*$capitals = array_flip($capitals); flip function key => values
foreach($capitals as $key => $value) {
    echo"{$key} => {$value} <br>";
}*/
//$capitals = array_reverse($capitals); обръща стойностите отгоре надолу

//echo count ($capitals); показва ни с цифра колко стойтости имаме

foreach($capitals as $key => $value) {
                                      // key = "USA", "JAPAN", "South Korea"
                                      // value = "Washington D.C/", "Kyoto", "Seoul", "New Delhi"
                                      // as - като
    echo "{$key} = {$value} <br>";
}
