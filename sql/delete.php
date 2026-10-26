<?php
require 'connection.php';

$student_id = "";
if(isset($_GET['id'])){
    $student_id = $_GET['id'];


$delete_query = "DELETE FROM students WHERE id = $student_id";
$delete = mysqli_query($conn, $delete_query);

if($delete){
    header('Location: index.php?deleted=true');
    exit();
} else{
    urldecode(mysqli_error($conn));
    header('Location: index.php?deleted=false');
    exit();
}
}


?>