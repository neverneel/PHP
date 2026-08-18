<?php
// Separate even and odd numbers into two different arrays

$a = [1,2,3,4,5,6,7,8,9,10];
$even = [];
$odd = [];

for($i = 0; $i < count($a); $i++){
    if($a[$i]%2 == 0){
        $even[] = $a[$i];
    } else{
        $odd[] = $a[$i];
    }
}

print_r($even);
echo "<br>";
print_r($odd)



?>