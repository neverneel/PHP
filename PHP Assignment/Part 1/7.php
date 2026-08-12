<?php

$a = 7;
$b = 8;

$c = null;

$c = $a;
$a = $b;
$b = $c;

echo $a," ", $b;


?>