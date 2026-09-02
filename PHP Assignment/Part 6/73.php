<?php
// Check if an array is a palindrome

$a = [1,1,0,1];
$c = [];


for($i = count($a) - 1; $i >= 0; $i--){
        $c[] = $a[$i];
        }

$misMatch = 0;

for($j = 0; $j < count($c); $j++){
        if($a[$j] != $c[$j]){
            $misMatch++;
        }
}

if($misMatch == 0){
    echo "palindrome";
} else{
    echo "not palindrome";
}
print_r ($c);


?>