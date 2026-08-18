<?php
// Store a multi-word string and convert it to a URL-friendly slug

$str = "Ultimate Guide: How to Learn PHP in 2026 & Beyond!";

$slug = strtolower($str);

$char = ["!",":","&"," "];

$slug = str_replace($char, " ", $slug );

$slug = trim($slug);

$slug = str_replace(" ", "-", $slug);

echo $slug;




?>