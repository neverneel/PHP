<?php
// Store a full name and extract the first name using explode()


$name = "Neel Kamal Punj";

$split = explode(" ", $name);

$fname = $split[1];

echo $fname;



?>