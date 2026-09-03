<?php
// Write a recursive function fibonacci($n)

// $num1 = 0;
// $num2 = 1;
// $sum = null;

// for($i = 0; $i < 9; $i++){
//     $sum = $num1 + $num2;
//     $num1 = $num2;
//     $num2 = $sum;
//     echo $sum. " ";
// }





function printNumbers($n) {
    if ($n > 0) {
        return 0;
    }

    echo $n . "<br>";

    printNumbers($n + 1);
}

printNumbers(1);





?>