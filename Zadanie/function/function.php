<?php

//  изчисление на общата стойност
function calculateTotal($price, $quantity, $discount = 0)
{
    $total = $price * $quantity;

    // Прилагане на отстъпката ако е зададена

    if ($discount > 0) {

        $total -= $total * ($discount / 100);
        
    }
    return $total;
}
?>