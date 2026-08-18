<?php
// Separate positive and negative numbers into two different arrays

$a = [-1,2,-3,4,-5,6,-7,8,-9,10];
$p = [];
$n = [];


for($i = 0; $i < count($a); $i++){
    if($a[$i] > 0){
        $p[] = $a[$i];
    } else{
        $n[] = $a[$i];
    }
}

print_r($p);
echo "<br>";
print_r($n)


?>