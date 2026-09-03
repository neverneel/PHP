<?php
// Write a function gcd($a, $b) that computes the greatest common divisor

function gcd($a, $b){
    $fa = [];
    $fb = [];
    echo "<pre>";

    for($i = 1; $i <= $a; $i++){
        if($a % $i == 0){
            $fa[] = $i;
        }
    }

    for($i = 1; $i <= $b; $i++){
        if($b % $i == 0){
            $fb[] = $i;
        }
    }

    $common = [];

    for($i = 0; $i < count($fa); $i++){
        for($j = 0; $j < count($fb); $j++){
            if($fa[$i] == $fb[$j]){
                $common[] = $fa[$i];
            }
        }
    }

    $max = $common[0];

    for($k = 0; $k < count($common) -1; $k++){
        if($common[$k +1] > $common[$k]){
            $max = $common[$k + 1];
        }
    }

    print_r($fa);
    print_r($fb);
    print_r($common);
    echo "GCD is: ". $max;
}


gcd(35, 49);




?>