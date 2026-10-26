<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students_db2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

// echo "Database Connnected Successfully";



?>