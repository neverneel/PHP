<?php
require 'connection.php';
require 'functions.php';
include('header.php');
include('sidebar.php');
// session_start();
$errors = [];




// echo "<pre>";
// print_r($_SESSION);

$user_id = $_SESSION['userData']['id'];
if(isset($_POST['update'])){
    $old_paassword = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    // $email = $_SESSION['userData']['email'];


    if(md5($old_paassword) != passwordMatch($conn, $user_id)){
        $errors['password'] = "Password doesn't match";
        } else{
          if($new_password == $old_paassword){
            $errors['same_password'] = "Password can't be same as old";
          }
          if($new_password != $confirm_password){
            $errors['password_match'] = "Password not confirmed";
          }
          if(empty($errors)){
              $update_query = "UPDATE users SET password = md5('$new_password') WHERE id = '$user_id'";
              $update = mysqli_query($conn, $update_query);  
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
                <h4 class="card-title">Change Your Password</h4>
                <form  class="forms-sample" method="post">
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Old Password</label>
                    <input type="password" name="old_password" class="form-control" id="exampleInputEmail1"/>
                    <?php
                    if(isset($errors['password'])){
                      echo '<p class = text-danger>'.$errors['password'].'</p>';
                    }
                  //   if(isset($errors['valid_email'])){
                  //     echo '<p>'.$errors['valid_email'].'</p>';
                  //   }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" name="new_password" class="form-control" id="exampleInputPassword1">
                    <?php
                    if(isset($errors['same_password'])){
                      echo '<p class = text-danger>'.$errors['same_password'].'</p>';
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confrim Password</label>
                    <input type="text" name="confirm_password" class="form-control" id="exampleInputPassword1">
                    <?php
                    if(isset($errors['password_match'])){
                      echo '<p class = text-danger>'.$errors['password_match'].'</p>';
                    }
                    ?>
                  </div>
                  <!-- <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div> -->
                  <button type="submit" name="update" class="btn btn-primary me-2">Update</button>
                  <!-- <a href="register.php" class="btn btn-primary me-2">Update</a> -->
                  
                </form>
              </div>
                  </div>
                </div>
            </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      </div>
    </div>
  <?php
 include('footer.php');
 
 ?>