<?php
// Create variables for principal, rate, and time, then calculate simple interest

$p = 15000;
$r = 5;
$t = 3;

// $i = ($p*$r*$t)/100;

// echo $i, "<br>";


// compoud interest

for($y = 0; $y <= $t; $y++){
    $i = ($p*$r*1)/100;
    $p = $i + $p;
}

echo $p;



?>