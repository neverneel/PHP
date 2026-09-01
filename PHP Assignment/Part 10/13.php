<?php
// Write a function discountPrice($price, $discount = 10) that applies a default discount percentage

function discountPrice($price, $discount = 10){
    $finalPrice = $price - ($discount / 100 * $price);
    echo $finalPrice;
}


discountPrice(100, 20);




?>