<?php
// Declare a variable with a float and separate its integer and decimal parts

$number = 45.78;

$integer = (int)$number;
echo $integer, "<br>";

$decimal = $number - $integer;

echo $decimal;

?>