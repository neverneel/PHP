<?php
// Find the kth largest element in an array without sorting

$a = [10,7,6,2,0,1,8,18];
// $b = $a[0];
// $c = $a[0];
// $d = $a[0];
$k = 3;

for($i = 0; $i < count($a); $i++){
    if($a[$i] > $a[0] && $k == 1){
        $a[0] = $a[$i];
        echo "largest : " . $b;
    }elseif(($a[$i] > $a[0]) && $a[0] > $a[0] && $k == 2){
        $a[0] = $a[$i];
        echo "second largest : " . $c;
    }elseif($a[$i] > $a[0] && $a[0] > $a[0] && $k == 3){
        $a[0] = $a[$i];
        echo "Third largest : " . $d;
    }else{
        echo "Hutt";
    }
}





// $pivot = $a[3];

// $b1 = [];
// $b2 = [];


// for($i = 0; $i < count($a); $i++){
//     if($a[$i] < $pivot){
//         $b1[] = $a[$i];
//     } else{
//         $b2[] = $a[$i];
//     }
// }

// $k = 3;
// $num = 0;

// if($k < count)

// print_r($b1);
// echo "<br>";
// print_r($b2);






?>