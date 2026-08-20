<?php
// Shift all zeros to the end of an array

$a = [2,0,5,6,0,8,0,0,9];
$c = [];

for($i = 0; $i < count($a);$i++){
    if($a[$i] != 0){
        $c [] = $a[$i];
        echo "<pre>";
        print_r($c);
    }
}
for($i = 0; $i < count($a);$i++){
    if($a[$i] == 0){
        $c [] = $a[$i];
        echo "<pre>";
        print_r($c);
    }
}



// for($i = 0; $i < count($a); $i++){
//     if($a[$i] == 0){
//         $c[] = $a[$i];
//     }
// }

// foreach($a as $key => $i){
//     if($i == 0){
//         unset($a[$key]);
//     }
// }

// print_r($c);
// echo "<br>";
// print_r($a);
// echo "<br>";



// $d = [];

// for($i = 0; $i < count($a); $i++){
//     $d[] = $a[$i];
// }

// // for($j = 0; $j < count($c) - 1; $j++){
// //     $d[] = $c[$j];
// // }


// print_r($d);




?>