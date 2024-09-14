<?php


function hypotensuse(float $a, float $b) {
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypotensuse(4,6);
