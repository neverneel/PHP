<?php
// Write a function generateSlugFromTitle($title) combining lowercase conversion and dash replacement

function generateSlugFromTitle($title){
    $title = strtolower($title);
    $title = str_replace(" ", "-", $title);

    echo $title;
}

generateSlugFromTitle("Hello World Neel Kamal");



?>