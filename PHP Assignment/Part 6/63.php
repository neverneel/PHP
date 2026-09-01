<?php
// Check if all elements in an array are unique

$a = [2,3,4,5,6];
$count = 0;

for($i = 0; $i < count($a); $i++){
    $maxCount = 0;
    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $maxCount++;
        }
    }
    echo $maxCount. "<br>";
    if($maxCount > $count){
        $count = $maxCount;
    }

}

if($count == 1){
    echo "unique";
} else{
    echo "not unique";
}


?>