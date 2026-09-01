<?php
// Find the average of elements at even indices

$a = [3,8,6,4,7,9,2];

$sum = 0;
$count = 0;

// for($i = 0; $i < count($a); $i++){
//     if($i % 2 == 0){
//         $sum = $sum + $a[$i];
//         $count++;
//     }
// }

//with while loop

$i = 0;
while($i < count($a)){
    if($i % 2 != 0){
        $sum = $sum + $a[$i];
        $count++;
    }
    $i++;
}



echo $count. "<br>". $sum. "<br>";
echo "Average is ". $avr = $sum / $count;







?>