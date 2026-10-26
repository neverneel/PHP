<?php
require 'connection.php';
include('header.php');
include('sidebar.php');
// session_start();

// echo "<pre>";
// print_r($_SESSION['userData']);
// die;
$update_message = [];
$errors = "";




// echo "<pre>";
// print_r($_SESSION);
$user_id = $_SESSION['userData']['id'];
$query = "SELECT * FROM users WHERE id = '$user_id'";
$fetch = mysqli_query($conn, $query);
$get_user = mysqli_fetch_assoc($fetch);
// echo "<pre>";
// print_r($get_user);
// die;


if(isset($_POST['update'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(!$first_name || !$last_name){
      $errors = "All fields are required";
    }

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

    if(empty($errors)){
      $update_query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', phone = '$phone', profile_image = '$temp_file_name' WHERE id = '$user_id'";
      $update = mysqli_query($conn, $update_query);

      if($update){
        $_SESSION['userData']['first_name'] = $first_name;
        $_SESSION['userData']['last_name'] = $last_name;
        $_SESSION['userData']['phone'] = $phone;

        $update_message['updated'] = "Profile Updated Successfully";
      }
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
                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['userData']['first_name'];?>">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION['userData']['last_name'];?>">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION['userData']['email'];?>" readonly>
                    <?php
                  //   if(isset($errors['password'])){
                  //     echo '<p>'.$errors['password'].'</p>';
                  //   }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION['userData']['phone'];?>">
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
                    if(isset($errors)){
                      echo '<p class = text-danger>'.$errors.'</p>';
                    }
                    ?>
                  <?php
                  if(isset($update_message['updated'])){
                      echo '<p class = text-success>'.$update_message['updated'].'</p>';
                  }
                  ?>
                  <!-- <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div> -->
                  <button type="submit" name="update" class="btn btn-primary me-2">Update</button>
                  <a href="passwordChange.php" class="btn btn-primary me-2">Change Password</a>
                  <!-- <a href="register.php" class="btn btn-primary me-2">Update</a> -->
                  
                </form>
                
              </div>
            </div>
          </div>
      </div>
 <?php
 include('footer.php');
 
 ?>