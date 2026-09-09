<?php
// Write a function verifyPassword($password, $hash) using password_verify()

function verifyPassword($password, $hash){
    if(password_hash($password, PASSWORD_DEFAULT) == $hash){
        echo "matched";
    } else{
        echo "Didn't Match";
    }
}


verifyPassword("Neelkamal@2001", "$2y$10$ZyUKg.TOD5cKC7YA5O1lhOIsgPcNop7heV6QhZ7lRSivRKhZnlMZK")



?>