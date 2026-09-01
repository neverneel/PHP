<?php
// Split an array into two halves manually

$a = [10,20,30,10,50,60,70];

$first = [];
$second = [];

$half = ceil(count($a) / 2);

echo $half, "<br>";

for($i = 0; $i < count($a); $i++){
    if($i < $half){
        $first[] = $a[$i];
    } else{
        $second[] = $a[$i];
    }
}


print_r ($first);
echo "<br>";
print_r ($second);



?>