<?php
// Store a number in binary, octal, and hexadecimal formats and print all three

$a = 10;
$aa = decbin($a);

$b = 67;
$bb = decoct($b);

$c = 26;
$cc = dechex($c);

echo $aa, "<br>", $bb, "<br>", $cc, "<br>";


$p = 0b1010;
echo $p, "<br>";

$q = 0o67;
echo $q, "<br>";

$r = 0x1A;
echo $r;



?>