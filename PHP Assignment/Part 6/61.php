<?php
// Find the most frequent element in an array using a loop

$a = [2,3,2,4,2,5,3,5,5,5,7,7,7,7,7,7,7,7,7,7,7,7,5,3,3,6,11,11,11,11,11,11,11,11];

$count=0;


for($i = 0; $i < count($a); $i++){
    $maxCount = 0;
    //  $temp = [];
    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $maxCount++;
        }
    }
//   echo $maxCount;
if($maxCount>$count){
    $count=$maxCount;
$new=$a[$i];
}
}
print_r($new);
 


?>