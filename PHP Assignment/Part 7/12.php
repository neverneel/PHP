<?php
// Check if the sum of the first half equals the sum of the second half

$a = [3,5,8,6,4,7,9,2,5];
echo "<pre>";

$mid = ceil(count($a));

//array_search to find index
// array_sum to find the sum of elements

for($i = 0; $i < array_search($mid, $a); $i++){
    $firstHalf[] = $a[$i];
}
for($i = array_search($mid, $a); $i < count($a); $i++){
    $secondHalf[] = $a[$i];
}

if(array_sum($firstHalf) == array_sum($secondHalf)){
    echo "sum is equal". "<br>";
} elseif(array_sum($firstHalf) != array_sum($secondHalf)){
    echo "sum is not equal". "<br>";
}




print_r($firstHalf);
print_r($secondHalf);



?>