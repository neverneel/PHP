<?php
$server = "localhost";
$database_name = "user_dahboard"; 
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, $database_name);

if (mysqli_connect_errno()) {
    die("Connection Failed". mysqli_connect_error());
}
// echo "Database connected successfully". "<br>";
?>