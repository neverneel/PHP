<?php
require 'connection.php';
require 'functions.php';
include ('header.php');

// session_start();
// if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
//   header("Location: dashboard.php");
// }

$errors = [];



if(isset($_POST['insert'])){
  $blogTitle = $_POST['blog-title'];
  $category = $_POST['category'];
  $content = $_POST['description'];
  
  // echo "<pre>";
  // print_r($_POST);
  // die;


  if(empty($errors)){
    $insert_query = "INSERT into `posts` (title, category_id, content, user_id) VALUES ('$blogTitle', '$category', '$content', '$userData[id]')";
    $insert = mysqli_query($conn, $insert_query);

    // if($insert){
    //   header('Location: addBlog.php?blogAdded=true');
    //   exit();
    // }
  }

}

  $fetch_cat_query = "SELECT * FROM `categories`";
  $fetchCat = mysqli_query($conn, $fetch_cat_query);



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
                      <h4 class="card-title text-center">Add Blog</h4>
                      <form class="forms-sample" method="post">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Title</label>
                          <input type="text" name="blog-title" class="form-control" id="blog-title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">


                          <!-- categories -->


                          <label for="exampleInputUsername1">Category</label>
                          
                          <select name="category" class="form-control" id="category">
                            <option>select category</option>
                            <?php 
                            if($fetchCat && mysqli_num_rows($fetchCat) > 0){
                            while($row= mysqli_fetch_assoc($fetchCat)){
                              $cat_id = $row["id"];
                            $cat_name = $row["name"];
                            // print_r($row);
                            // die;
                            ?>
                            <option value="<?php echo htmlspecialchars($cat_id); ?>"> 
                              <?php echo htmlspecialchars($cat_name); ?>
                            </option>
                            <?php 
                                }
                              } 
                            ?>
                          </select>

                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea type="text" name="description" class="form-control" id="description" placeholder="Add Description"></textarea>
                        </div>
                        
                        <button type="submit" name="insert" class="btn btn-primary me-2">Add Blog</button>
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