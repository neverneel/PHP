<?php
require 'connection.php';
require 'functions.php';

// session_start();


$errors = [];

if(isset($_POST['insert'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  
  // echo "<pre>";
  // print_r($_POST);

  if(!$first_name){
    $errors['first_name'] = "First Name is required";
  }
  if(!$last_name){
    $errors['last_name'] = "Last Name is required";
  }
  if(!$email){
    $errors['email'] = "Email is required";
  }else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['valid_email'] = "Invalid Email";
    }
    if(emailExists($conn, $email)){
      $errors['email_exists'] = "Email address already exists";
    }
  }
  if(!$password){
    $errors['password'] = "Password is required";
  }
  if(!$confirm_password){
    $errors['confirm_password'] = "Password needs to be confirmed";
  }
  if($confirm_password != $password){
    $errors['password-mismatch'] = "Password doesn't match";
  }


  if(empty($errors)){
    $insert_query = "INSERT into `users` (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', md5('$password'))";
    $insert = mysqli_query($conn, $insert_query);

    if($insert){
      header('Location: users.php?userAdded=true');
      exit();
    }
  }

}

include ('header.php');
include ('sidebar.php');
    ?>

    <?php 
    if(isset($_SESSION['userData']) && $_SESSION['userData']['role'] == 'admin'){
    ?>
      <!-- partial -->
      <!-- <div class="container page-body-wrapper justify-content-center"> -->
     
        <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row justify-content-center">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Add User</h4>
                      <form class="forms-sample" method="post">
                        <div class="form-group">
                          <label for="exampleInputUsername1">First Name</label>
                          <input type="text" name="first_name" class="form-control" id="exampleInputUsername1" placeholder="Enter First Name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ""; ?>">
                          <?php
                          if(isset($errors['first_name'])){
                            echo '<p class = text-danger>'.$errors['first_name'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputUsername1">Last Name</label>
                          <input type="text" name="last_name" class="form-control" id="exampleInputUsername1" placeholder="Enter Last Name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ""; ?>">
                          <?php
                          if(isset($errors['last_name'])){
                            echo '<p class = text-danger>'.$errors['last_name'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder=" Enter Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>">
                          <?php
                          if(isset($errors['email'])){
                            echo '<p class = text-danger>'.$errors['email'].'</p>';
                          }
                          if(isset($errors['valid_email'])){
                            echo '<p class = text-danger>'.$errors['valid_email'].'</p>';
                          }
                          if(isset($errors['email_exists'])){
                            echo '<p class = text-danger>'.$errors['email_exists'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                          <?php
                          if(isset($errors['password'])){
                            echo '<p class = text-danger>'.$errors['password'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputConfirmPassword1">Confirm Password</label>
                          <input type="password" name="confirm_password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Re-enter Password">
                          <?php
                          if(isset($errors['confirm_password'])){
                            echo '<p class = text-danger>'.$errors['confirm_password'].'</p>';
                          }
                          if(isset($errors['password-mismatch'])){
                            echo '<p class = text-danger>'.$errors['password-mismatch'].'</p>';
                          }

                          ?>
                        </div>
                        <button type="submit" name="insert" class="btn btn-primary me-2">Add User</button>
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
    }
    else{
      echo "You don't have access to this page";
    }
    ?>
  <?php
  include('footer.php');
  ?>