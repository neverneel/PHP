<?php
// Store a password string and hash it using md5() or sha1()

$pass = "vansh007";

$hash = md5($pass);
echo $hash, "<br>";



$hash2 = sha1($pass);
echo $hash2, "<br>";


$securehash = password_hash($pass, PASSWORD_DEFAULT);
echo $securehash;





?>