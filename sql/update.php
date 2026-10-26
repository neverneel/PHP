<?php
require 'connection.php';

$errors = [];
$student_id = "";
if(isset($_GET['id'])){
    $student_id = $_GET['id'];
    // echo $student_id;
}

$query = "SELECT * FROM students WHERE id=".$student_id;
$get_student_info = mysqli_query($conn, $query);
$get_student = mysqli_fetch_assoc($get_student_info);

// print_r($get_student);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(!$name){
        $errors['name'] = "Name is required";
    }

    if(!$email){
        $errors['email'] = "Email is required";
    } else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['valid_email'] = "Invalid Email";
        }
    }

    if(!$phone){
        $errors['phone'] = "Phone Number is required";
    }

    $temp_file_name = $get_student['profile_image'];
    if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
        $update_dir = 'images/';
        $temp_location = $_FILES['image']['tmp_name'];
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $temp_file_name = time().'.'.$ext;
        $destination_file = $update_dir.$temp_file_name;
        move_uploaded_file($temp_location, $destination_file);
    }

    if(empty($errors)){
        $update_query = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', profile_image = '$temp_file_name' WHERE id = '$student_id'";
        $update = mysqli_query($conn, $update_query);

        if($update){
            header('Location: index.php?updated=true');
            exit();
        } else{
            urldecode(mysqli_error($conn));
            header('Location: index.php?updated=false');
            exit();
        }
    }

    
}


?>

<html>
    <head>
        <style>
            .error{
                color: red;
                margin: 10px;
            }
        </style>
    </head>
    <form method="POST" enctype="multipart/form-data">
        <!-- <input type="text" name="id" value="" readonly> -->
        <br>
        <input type="text" name="name" value="<?php echo isset($get_student['name']) ? $get_student['name'] : ""; ?>">
        <?php 
        if(isset($errors['name'])){
            echo '<p class = error>'.$errors['name'].'</p>';
        }
        ?>

        <br>
        <input type="text" name="email" value="<?php echo isset($get_student['email']) ? $get_student['email'] : "";?>">
        <?php
        if(isset($errors['email'])){
            echo '<p class = error>'.$errors['email'].'</p>';
        }
        if(isset($errors['valid_email'])){
            echo '<p class = error>'.$errors['valid_email'].'</p>';
        }
        ?>
        <br>
        <input type="text" name="phone" value="<?php echo isset($get_student['phone']) ? $get_student['phone'] : "";?>">
        <?php
        if(isset($errors['phone'])){
            echo '<p class = error>'.$errors['phone'].'</p>';
        }
        ?>
        <br>
        <br>
        <input type="file" name="image">
        <br>
        <br>
        <input type="submit" name="update" value="update">
    </form>
</html>