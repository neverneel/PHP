<?php
// Store a date string and extract the day, month, and year


$str = "12/08/2026";


$date = new DateTime($str);

echo $date->format('y-m-d');



?>