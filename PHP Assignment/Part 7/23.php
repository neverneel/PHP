<?php
// Rearrange an array so all even numbers come before odd numbers

$a = [1,2,3,4,5,6,7,8,9];
$even = [];
$odd = [];
$finalArray = [];

echo "<pre>";

for($i = 0; $i < count($a); $i++){
    if($a[$i] % 2 == 0){
        $even[] = $a[$i];
    } else{
        $odd[] = $a[$i];
    }
}

for($i = 0; $i < count($even); $i++){
    $finalArray[] = $even[$i];
}
for($i = 0; $i < count($odd); $i++){
    $finalArray[] = $odd[$i];
}


print_r($even);
print_r($odd);

print_r($finalArray);






?>