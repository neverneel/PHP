<?php
// Print all elements that appear more than once
$a = [2,3,2,4,5,4,6,7,6,8];
echo "<pre>";
$b = [];

for($i = 0; $i < count($a); $i++){
    $count = 0;
    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $count++;
            // echo $a[$i], "<br>";
        }
    }

    if($count > 1){
        $b[] = $a[$i];
        // echo $a[$i], "<br>";
    }
}

print_r($b);


?>