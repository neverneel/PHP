<?php
// Print elements that are greater than all elements to their right

$a = [2,5,6,8,7,1,2,3];
$b = null;
echo "<pre>";

for($i = 0; $i < count($a); $i++){
    $count = 0;
    for($j = $i + 1; $j < count($a); $j++){
        if($a[$j] > $a[$i]){
            break;
        } else{
            $b[] = $a[$i];
           
            break;
        }
    }
}


 print_r ($b);






?>