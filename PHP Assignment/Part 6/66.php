<?php
// Remove a specific value from an array by shifting elements

$a = [10,20,30,40,50];

for($i = 0; $i < count($a) - 1; $i++){
    if($a[$i] == 30){
        $a[$i] = $a[$i+1];
        // $a[$i + 1] = null;
        $a[$i + 1] = $a[count($a)-1];
        $a[count($a)-1] = null;
        unset($a[count($a)-1]);
    }
}
print_r ($a);


?>