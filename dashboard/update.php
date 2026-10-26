<?php
// session_start();
require 'connection.php';
include ('header.php');
include ('sidebar.php');
$update_message = [];

$user_id = "";
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    // echo $user_id;
}


$query = "SELECT * FROM users WHERE id = '$user_id'";
$get_user_info = mysqli_query($conn, $query);
$get_user = mysqli_fetch_assoc($get_user_info);
// echo "<pre>";
// print_r($get_user);


$fetch_query = "SELECT * FROM users";
$fetch = mysqli_query($conn, $fetch_query);


if(isset($_POST['update'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $temp_file_name = $get_user['profile_image'];

    $temp_file_name = $get_user['profile_image'];
    if(isset($_FILES['profile']) && $_FILES['profile']['name'] != ""){
      $upload_dir = "profilePictures/";
      $temp_location = $_FILES['profile']['tmp_name'];
      $ext = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
      $temp_file_name = time().'.'.$ext;
      $destination_file = $upload_dir.$temp_file_name;
      move_uploaded_file($temp_location, $destination_file);
      // echo $temp_file_name;
      // die;
    }

    $update_query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone = '$phone', profile_image = '$temp_file_name' WHERE id = '$user_id'";
    $update = mysqli_query($conn, $update_query);

    // if($update){
    //     $_SESSION['userData']['first_name'] = $first_name;
    //     $_SESSION['userData']['last_name'] = $last_name;
    //     $_SESSION['userData']['email'] = $email;
    // }

    if ($update) {

        // Update session data
        $_SESSION['userData']['first_name'] = $first_name;
        $_SESSION['userData']['last_name'] = $last_name;
        $_SESSION['userData']['email'] = $email;

        // Update the email used to identify this user
        $user_email = $email;

        $update_message['updated'] = "Profile Updated Successfully";

        // echo "Profile updated successfully!";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row justify-content-center">
          <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Update Your Information</h4>
                <form  class="forms-sample" method="post" enctype="multipart/form-data">
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" value="<?php echo $get_user['first_name'];?>">
                    <?php
                  //   if(isset($errors['email'])){
                  //     echo '<p>'.$errors['email'].'</p>';
                  //   }
                  //   if(isset($errors['valid_email'])){
                  //     echo '<p>'.$errors['valid_email'].'</p>';
                  //   }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1" value="<?php echo $get_user['last_name'];?>">
                    <?php
                  //   if(isset($errors['password'])){
                  //     echo '<p>'.$errors['password'].'</p>';
                  //   }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo $get_user['email'];?>">
                    <?php
                  //   if(isset($errors['password'])){
                  //     echo '<p>'.$errors['password'].'</p>';
                  //   }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $get_user['phone'];?>">
                    <?php
                  //   if(isset($errors['password'])){
                  //     echo '<p>'.$errors['password'].'</p>';
                  //   }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Choose a Profile Picture</label>
                    <input type="file" name="profile" class="form-control" id="exampleInputPassword1">
                    <?php
                  //   if(isset($errors['password'])){
                  //     echo '<p>'.$errors['password'].'</p>';
                  //   }
                    ?>
                  </div>
                  <?php
                  if(isset($update_message['updated'])){
                      echo '<p class = text-success>'.$update_message['updated'].'</p>';
                  }
                  ?>
                  <!-- <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div> -->
                  
                  <br>
                  <button type="submit" name="update" class="btn btn-primary me-2">Update</button>
                  <a href="passwordChange.php" class="btn btn-primary me-2">Change Password</a>
                  <!-- <a href="register.php" class="btn btn-primary me-2">Update</a> -->
                  
                </form>
                
              </div>
            </div>
          </div>
      </div>

<?php
include ('footer.php');


?>