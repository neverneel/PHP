<?php
require "connection.php";

if(isset($_POST["insert"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    $sql_insert = "INSERT into `students` (name, email, phone, gender) VALUES ('$name', '$email', '$phone', '$gender')";

    $insert = mysqli_query($conn, $sql_insert);


    if($insert){
        header("Location: index.php?inserted=true");
        exit();
    } else{
        $error = urldecode(mysqli_error($conn));
        header("Location: index.php?inserted=false&msg=$error");
        exit();
    }
}



?>
