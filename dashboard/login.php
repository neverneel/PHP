<?php
session_start();
if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
  header("Location: dashboard.php");
}
require 'connection.php';

$errors = [];
$usererror = "";
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!$email){
    $errors['email'] = "Email is required";
  }
  else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['valid_email'] = "Invalid Email";
    }
  }

  if(!$password){
    $errors['password'] = "Password is required";
  }

  // echo "<pre>";
  // print_r($_POST);
  $md5_passwrd = md5($_POST['password']);
  $fetch_query = "SELECT id, first_name, last_name, email, phone, role, profile_image FROM users WHERE email = '$email' AND password='$md5_passwrd'";
  $fetch = mysqli_query($conn, $fetch_query);
  //if user found
  if($fetch->num_rows > 0){
    $user = mysqli_fetch_assoc($fetch);
    // echo "<pre>";
    // print_r($user);
    // die;
    
    
    $_SESSION['userData'] = $user; //user data stored in session here
    // echo "<pre>";
    // print_r($_SESSION);
    // die;
    
    header("Location: dashboard.php");
  }else{
    $errors['user_error'] = "Email address or password did'nt match. Try again!";
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
      // function validateForm(){
      //   let email = document.getElementById("email").value.trim();
      //   let password = document.getElementById("password").value.trim();

      //   if(email === ""){
      //     alert("Email is required");
      //     return false;
      //   }
      //   if(password === ""){
      //     alert("Password is required");
      //     return false;
      //   }
      // }

      $(function(){

      $("#login-form").on('submit',function(event){
        
        // event.preventDefault();
        let email = $("#email").val();
        let password = $("#password").val();
        // var name = $("input[name='email']").val();
        console.log(email)
        console.log(password)

        let inValid = true;

        if(email === ""){
          $("#email-error").text("Email is required");
          return inValid = false;
        }
        if(password === ""){
          $("#password-error").text("Password is required");
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
         <a href="register.php"><button class="btn btn-outline-success">Register</button></a>
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
                      <h4 class="card-title">Login</h4>
                      <form  id ="login-form" method="post" onsubmit="return validateForm()" novalidate>
                  
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                          <small id="email-error" class="text-danger"></small>
                          <?php
                          // if(isset($errors['email'])){
                          //   echo '<p class = text-danger>'.$errors['email'].'</p>';
                          // }
                          // if(isset($errors['valid_email'])){
                          //   echo '<p class = text-danger>>'.$errors['valid_email'].'</p>';
                          // }
                          ?>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                          <small id="password-error" class="text-danger"></small>
                          <?php
                          // if(isset($errors['password'])){
                          //   echo '<p class = text-danger>'.$errors['password'].'</p>';
                          // }
                          ?>
                        </div>
                        <!-- <div class="form-check form-check-flat form-check-primary">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Remember me </label>
                        </div> -->
                        <button type="submit" name="login" class="btn btn-primary me-2">Login</button>
                        <a href="register.php" class="btn btn-primary me-2">Register</a>
                        <?php
                          if(isset($errors['user_error'])){
                            echo '<p class = text-danger>'.$errors['user_error'].'</p>';
                          }
                          ?>
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