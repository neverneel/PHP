<?php
require 'connection.php';
require 'functions.php';

// session_start();
// if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
//   header("Location: dashboard.php");
// }

$errors = [];

if(isset($_POST['insert'])){
  $category = $_POST['category'];
  
  // echo "<pre>";
  // print_r($_POST);

  if(!$category){
    $errors['category'] = "Category can't be empty";
  }


  if(empty($errors)){
    $insert_query = "INSERT into `categories` (name) VALUES ('$category')";
    $insert = mysqli_query($conn, $insert_query);

    if($insert){
      header('Location: addCategory.php?categoryAdded=true');
      exit();
    }
  }

}

include ('header.php');
include ('sidebar.php');
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
                      <h4 class="card-title text-center">Add Category</h4>
                      <form class="forms-sample" method="post">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Title</label>
                          <input type="text" name="category" class="form-control" id="category" placeholder="Enter Title">
                          <?php
                          if(isset($errors['category'])){
                            echo '<p class = text-danger>'.$errors['category'].'</p>';
                          }

                          ?>
                        </div>
                        
                        
                        
                        <button type="submit" name="insert" class="btn btn-primary me-2">Add Category</button>
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