<?php
// Write a function hashPassword($password) using password_hash()

function hashPassword($password){
    $secure = password_hash($password, PASSWORD_DEFAULT);
    echo $secure;
}


hashPassword("Neelkamal@2001");


// $2y$10$ZyUKg.TOD5cKC7YA5O1lhOIsgPcNop7heV6QhZ7lRSivRKhZnlMZK
?>