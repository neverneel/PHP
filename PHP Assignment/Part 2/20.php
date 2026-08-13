<?php
// Create a price variable, apply a 15% discount, and display the final price

$price = 100;

$dis = 15;

$fprice = $price - (($dis / 100) * $price);

echo $fprice;




?>