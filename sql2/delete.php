<?php
require "connection.php";

$student_id = "";
if(isset($_GET['id'])){
    $student_id = $_GET['id'];

    $query_delete = "DELETE FROM students where id = '$student_id'";
    $delete = mysqli_query($conn, $query_delete);

    if($delete){
        header("Location: index.php?deleted=true");
        exit();
    } else{
        $error = urldecode(mysqli_error($conn));
        header("Location: index.php?deleted=false");
        exit();
    }

}




?>