<?php 
// session_start();

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


$errors = [];

if(isset($_POST["insert"])){
 
    //store all post/form data into variables
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    if(!$name){
        $errors["name"]  = "Name is required!";
    }
    if(!$email){
        $errors["email"]  = "Email is required!";
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email_valid"]  = "Invalid email address format.";
        }
    }
    if(!$phone){
        $errors["phone"]  = "Phone is required!";
    }

    if(!isset($_FILES['image']) || $_FILES['image']['name'] == ""){
        $errors['image'] = "Image is required";
    }
    $temp_file_name = "";
    if(empty($errors)){
        if(isset($_FILES["image"]) && $_FILES["image"]["name"]){
        $upload_dir = 'images/';
        $temp_location = $_FILES["image"]["tmp_name"];
        
        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $temp_file_name = time().'.'.$ext;
        $destinationFile = $upload_dir .$temp_file_name;
       
        if(move_uploaded_file($temp_location, $destinationFile)){
            echo "File uploaded successfully";
        }else{
            echo "File is not uploaded";
        }
    }
    }
    
    

    

    if(empty($errors)){
        //prepare our insert query
        $sql_query = "INSERT into `students` (name, email, phone, profile_image) VALUES ('$name', '$email', '$phone', '$temp_file_name')";
    
        $insert = mysqli_query($conn, $sql_query); //execute query

        // $last_student = "";
        if ($insert) {
            setcookie("last_student", $name, time() + 3600);
            header("Location: index.php?inserted=true");
            exit();
        } else {
            $error = urlencode(mysqli_error($conn));
            header("Location: index.php?inserted=false&msg=$error");
            exit();
        }
    }
}

$fetch_query = "SELECT * FROM students";
$fetch = mysqli_query($conn, $fetch_query);



?>

<html>
    <head>
        <title>Insert Student</title>
        <style>
            .error{
                color: #f00;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        if(isset($_COOKIE['last_student'])){
            echo "Last Student Added: ". $_COOKIE['last_student'];
        }
        
        ?>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : "";?>" />
            <?php  
            // if(isset($errors["name"])){
            //     echo '<p class="error">'.$errors["name"].'</p>';
            // }
            ?>
            <br>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "";?>" />
            <?php  
            // if(isset($errors["email"])){
            //     echo '<p class="error">'.$errors["email"].'</p>';
            // }
            //  if(isset($errors["email_valid"])){
            //     echo '<p class="error">'.$errors["email_valid"].'</p>';
            // }
            ?>
            
            <br>
            <input type="number" name="phone" placeholder="Enter Phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : "";?>"  />
            <?php
            // if(isset($errors["phone"])){
            //     echo '<p class="error">'.$errors['phone'].'</p>';
            // }
            ?>
            <br>
            <!-- file Upload -->



<label for="images">Your image</label>
<?php
// if(isset($errors['image'])){
//     echo '<p class="error">'.$errors['image'].'</p>';
// }

?>
<input type="file" name="image" id="images">

<br>

<input type="submit" name="insert" value="Submit">
<?php  
foreach($errors as $error){
    echo '<p class="error">'.$error.'</p>';
}
?>
      
    <?php 
    if(isset($_GET["inserted"]) && $_GET["inserted"] == 'true'){
        echo "<p style='color: green;'>Student added successfully</p>";

    }elseif(isset($_GET["inserted"]) && $_GET["inserted"] == 'false' && isset($_GET["msg"])){
        echo "<p style='color:red;'>".$_GET["msg"]."</p>";
    }
    ?> 
        </form>
        <br>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Image</td>
                <td>Action</td>
            </tr>


            <?php while($row = mysqli_fetch_assoc($fetch)){?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['phone']?></td>
                <td>
                    <?php if($row["profile_image"]) { ?>
                        <img width="100px" src="images/<?php echo $row["profile_image"]; ?>"/>
                    <?php } ?>
                </td>
                <td><a href="update.php?id=<?php echo $row['id']?>"><button>Edit</button></a> <a href="index.php?id=<?php echo $row['id']?>"><button>Delete</button></a></td>
            </tr>

            <?php }?>
        </table>

    </body>
</html>