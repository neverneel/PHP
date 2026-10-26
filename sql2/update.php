<?php
require "connection.php";
$student_id = "";
if(isset($_GET['id'])){
    $student_id = $_GET['id'];
}
$query = "SELECT * FROM students WHERE id=".$student_id;
$get_student_info = mysqli_query($conn, $query);
$get_student = mysqli_fetch_assoc($get_student_info);


if(isset($_POST["update"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    $temp_file_name = $get_student['profile_image'];
    if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
        $upload_dir = 'images/';
        $temp_location = $_FILES['image']['tmp_name'];
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $temp_file_name = time().'.'.$ext;
        $destination_file = $upload_dir.$temp_file_name;
        move_uploaded_file($temp_location, $destination_file);
    }

    $query_update = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', gender = '$gender', profile_image = '$temp_file_name' WHERE id = $student_id";
    $update = mysqli_query($conn, $query_update);

    if($update){
        header("Location: index.php?updated=true");
        exit();
    } else{
        $error = urldecode(mysqli_error($conn));
        header("Location: index.php?updated=false&msg=$error");
        exit();
    }
}

?>

<html>
    <form method="POST" enctype="multipart/form-data">
        <!-- <input type="text" name="id" value="" readonly>
        <br> -->
        <input type="text" name="name" placeholder="Enter Name" value="<?php echo isset($get_student['name']) ? $get_student['name'] : '';  ?>">
        <br>
        <input type="email" name="email" placeholder="Enter Email" value="<?php echo isset($get_student['email']) ? $get_student['email'] : '';  ?>">
        <br>
        <input type="number" name="phone" placeholder="Enter Phone Number" value="<?php echo isset($get_student['phone']) ? $get_student['phone'] : '';  ?>">
        <br>
        <label>Gender: </label>
        <input type="radio" name="gender" value="Male" <?php echo isset($get_student["gender"]) && $get_student["gender"] == 'Male' ? "checked": ""; ?>>
        <label>Male</label>
        <input type="radio" name="gender" value="Female" <?php echo isset($get_student["gender"]) && $get_student["gender"] == 'Female' ? "checked": ""; ?>>
        <label>Female</label>
        <br>
        <br>
        <input type="file" name="image">
        <br>
        <br>
        <input type="submit" value="update" name="update">
    </form>
</html>