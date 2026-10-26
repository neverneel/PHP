<?php
require "connection.php";

$sql_fetch = "SELECT * FROM students";
$fetch = mysqli_query($conn, $sql_fetch);

$errors = [];
if(isset($_POST["insert"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    // $image = $_FILES['image'];

    if(!$name){
        $errors['name'] = "Name is required!";
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

    $temp_file_name = "";
    if(isset($_FILES['image']) && isset($_FILES['image']['name'])){
        $upload_dir = 'images/';
        $temp_location = $_FILES['image']['tmp_name'];
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $temp_file_name = time().'.'.$ext;
        $destination_file = $upload_dir.$temp_file_name;
        move_uploaded_file($temp_location, $destination_file);
    }

    

    if(empty($errors)){
        $sql_insert = "INSERT into `students` (name, email, phone, gender, profile_image) VALUES ('$name', '$email', '$phone', '$gender', '$temp_file_name')";

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
    
}

?>


<html>
    <head>
        <title>Insert Student</title>
        <style>
            .error{
                color: red;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>">
            <?php 
            if(isset($errors["name"])){
                echo '<p class = error>'.$errors["name"].'</p>';
            }
            ?>
            <br>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>">
            <?php
            if(isset($errors["email"])){
                echo '<p class = error>'.$errors['email'].'</p>';
            }
            if(isset($errors["valid_email"])){
                echo '<p class = error>'.$errors['valid_email'].'</p>';
            }
            ?>
            <br>
            <input type="number" name="phone" placeholder="Enter Phone Number" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ""; ?>">
            <?php
            if(isset($errors['phone'])){
                echo '<p class = error>'.$errors['phone'].'</p>';
            }
            ?>
            <br>
            <label>Gender:</label>
            <input type="radio" name="gender" value="Male">
            <label for="">Male</label>
            <input type="radio" name="gender" value="Female">
            <label for="">Female</label>
            <br>
            <br>
            <input type="file" name="image">
            <br>
            <br>
            <input type="submit" name="insert" value="submit">
            <br>
        </form>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Gender</td>
                <td>Image</td>
                <td>Action</td>
            </tr>

            <?php while($row = mysqli_fetch_assoc($fetch)){?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php if($row['profile_image']) {?>
            <img width="100px" src="images/<?php echo $row['profile_image']?>" alt="">
            <?php }?>
            </td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
                <a href="delete.php?id=<?php echo $row['id']; ?>"><button>Delete</button></a></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>