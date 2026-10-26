<?php
session_start(); 
require "connection.php";

$_SESSION["errors"] = [];


if(isset($_POST["insert"])){
    //store all post/form data into variables
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    if(!$name){
        $_SESSION["errors"]["name"]  = "Name is required!";
    }
    if(!$email){
        $_SESSION["errors"]["email"]  = "Email is required!";
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["errors"]["email_valid"]  = "Invalid email address format.";
        }
    }
    if(!$phone){
        $_SESSION["errors"]["phone"]  = "Phone is required!";
    }

   

    if(empty($_SESSION["errors"])){
        //prepare our insert query
        $sql_query = "INSERT into `students` (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
        $insert = mysqli_query($conn, $sql_query); //execute query

    
        // if ($insert) {
        //     header("Location: index.php?inserted=true");
        //     exit();
        // } else {
        //     $error = urlencode(mysqli_error($conn));
        //     header("Location: index.php?inserted=false&msg=$error");
        //     exit();
        // }
    }else{
        header("Location: index.php?inserted=false");
        exit();
    }
   

}
?>
