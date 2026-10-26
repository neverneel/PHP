<?php
session_start();
if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
  header("Location: dashboard.php");
}
require 'connection.php';
require 'functions.php';

$errors = [];

if(isset($_POST['insert'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
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
  if(!$phone){
    $errors['phone'] = "Phone Number is required";
  }else {
    if(phoneExists($conn, $phone)){
      $errors['phone_exists'] = "Phone Number already exists";
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
    $insert_query = "INSERT into `users` (first_name, last_name, email, phone, role, password) VALUES ('$first_name', '$last_name', '$email', '$phone', 'user', md5('$password'))";
    $insert = mysqli_query($conn, $insert_query);

    if($insert){
      header('Location: register.php?inserted=true');
      exit();
    }
  }


  
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
      $(function(){
        $("#register-form").on('submit',function(event){

        // event.preventDefault();
          let firstName = $("#first_name").val();
          let lastName = $("#last_name").val();
          let email = $("#email").val();
          let phone = $("#phone").val();
          let password = $("#password").val();
          let confirmPassword = $("#confirm_password").val();

          // console.log(firstName,lastName, email, phone, password, confirmPassword)

          let inValid = true;

          if(firstName === ""){
            $("#firstName-error").text("First Name is required");
            return inValid = false;
          }
          if(lastName === ""){
            $("#lastName-error").text("Last Name is required");
            return inValid = false;
          }
          if(email === ""){
            $("#email-error").text("Email is required");
            return inValid = false;
          }
          if(phone === ""){
            $("#phone-error").text("Phone is required");
            return inValid = false;
          }
          if(password === ""){
            $("#password-error").text("Password is required");
            return inValid = false;
          }
          if(confirmPassword === ""){
            $("#confirmPassword-error").text("Password needs to be confirmed");
            return inValid = false;
          }

          if(!inValid){
            event.preventDefault();
          }
        });
      });
    </script>
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/> -->
         <a href="login.php"><button class="btn btn-outline-success">Login</button></a>
    </div>
  </div>
</nav>
    
      <!-- partial -->
      <div class="container page-body-wrapper justify-content-center">
     
        <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row justify-content-center">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-center">Register</h4>
                      <form class="forms-sample" method="post" id="register-form">
                        <div class="form-group">
                          <label for="exampleInputUsername1">First Name</label>
                          <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ""; ?>">
                          <small id="firstName-error" class="text-danger"></small>
                          <?php
                          if(isset($errors['first_name'])){
                            echo '<p class = text-danger>'.$errors['first_name'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputUsername1">Last Name</label>
                          <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ""; ?>">
                          <small id="lastName-error" class="text-danger"></small>
                          <?php
                          if(isset($errors['last_name'])){
                            echo '<p class = text-danger>'.$errors['last_name'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="text" name="email" class="form-control" id="email" placeholder=" Enter Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ""; ?>">
                          <small id="email-error" class="text-danger"></small>
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
                          <label for="exampleInputEmail1">Phone Number</label>
                          <input type="text" name="phone" class="form-control" id="phone" placeholder=" Enter Email" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ""; ?>">
                          <small id="phone-error" class="text-danger"></small>
                          <?php
                          if(isset($errors['phone'])){
                            echo '<p class = text-danger>'.$errors['phone'].'</p>';
                          }
                          if(isset($errors['phone_exists'])){
                            echo '<p class = error>'.$errors['phone_exists'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                          <small id="password-error" class="text-danger"></small>
                          <?php
                          if(isset($errors['password'])){
                            echo '<p class = text-danger>'.$errors['password'].'</p>';
                          }

                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputConfirmPassword1">Confirm Password</label>
                          <input type="text" name="confirm_password" class="form-control" id="confirm_password" placeholder="Re-enter Password">
                          <small id="confirmPassword-error" class="text-danger"></small>
                          <?php
                          if(isset($errors['confirm_password'])){
                            echo '<p class = text-danger>'.$errors['confirm_password'].'</p>';
                          }
                          if(isset($errors['password-mismatch'])){
                            echo '<p class = text-danger>'.$errors['password-mismatch'].'</p>';
                          }

                          ?>
                        </div>
                        <button type="submit" name="insert" class="btn btn-primary me-2">Register</button>
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>