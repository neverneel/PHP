<?php
// Create a variable containing a JSON string and decode it into an object

$j = '{"name" : "Neel", "age" : "24", "city" : "Tarn Taran"}';

$key = json_decode($j);

echo $key -> name," ", $key -> age;





?>