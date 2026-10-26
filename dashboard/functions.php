<?php  
require 'connection.php';
function emailExists($connection, $email){
    $query = "SELECT * FROM users WHERE email = '$email'";
    $check_user = mysqli_query($connection, $query);
    return $check_user->num_rows > 0 ? true : false;
}

function phoneExists($connection, $phone){
    $query = "SELECT * FROM users WHERE phone = '$phone'";
    $check_user = mysqli_query($connection, $query);
    return $check_user->num_rows > 0 ? true : false;
}

function passwordMatch($connection, $id){
    $query = "SELECT password FROM users WHERE id = '$id'";
    $password = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($password);

    return $user['password'] ?? null;
}

function totalUsers($connection){
    $query = "SELECT * FROM users";
    $fetch = mysqli_query($connection, $query);
    return $fetch->num_rows;
}

// echo fullData($conn);

?>