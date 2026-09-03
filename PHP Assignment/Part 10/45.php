<?php
// Write an arrow function (fn($x) => $x * 2) and use it in array_map()

$a = [1,2,3,1,4,5,6];
echo "<br>";

$result = array_map(fn($x) => $x *2, $a);

print_r($result);



?>