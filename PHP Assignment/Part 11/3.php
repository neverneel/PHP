<?php
// Write a function lcm($a, $b) that computes the least common multiple


function lcm($a, $b){
    $fa = [];
    $fb = [];
    echo "<pre>";

    for($i = 1; $i <= $b; $i++){
        $fa[] = $i * $a;
    }

    for($i = 1; $i <= $a; $i++){
            $fb[] = $i * $b;
    }

    $common = [];

    for($i = 0; $i < count($fa); $i++){
        for($j = 0; $j < count($fb); $j++){
            if($fa[$i] == $fb[$j]){
                $common[] = $fa[$i];
            }
        }
    }

    echo "LCM is: ". $common[0]. "<br>";
    print_r($fa);
    print_r($fb);
    print_r($common);

}


lcm(10,35);




?>