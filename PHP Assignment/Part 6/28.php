<?php
$array = [1, 2, 3, 4, 2, 5, 3];

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] == $array[$j]) {
            echo $array[$i] . " is duplicate<br>";
        }
    }
}
?>