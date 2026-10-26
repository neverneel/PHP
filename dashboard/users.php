<?php
// echo "Dashboard PHP is running!";
// die();

// echo "<pre>";
// var_dump($_GET);
// die();
require 'connection.php';
include ('header.php');

$user_id = "";
if (isset($_GET['del'])) {
    // echo "Delete condition reached!<br>";

    $user_id = (int) $_GET['del'];

    // echo "User ID: " . $user_id . "<br>";

    $delete_query = "DELETE FROM users WHERE id = $user_id";

    $delete = mysqli_query($conn, $delete_query);

    // if ($delete) {
    //     if (mysqli_affected_rows($conn) > 0) {
    //         header("Location: dashboard.php?deleted=true");
    //         exit();
    //     } else {
    //         echo "No user found with ID: " . $user_id;
    //     }
    // } else {
    //     echo "Delete failed: " . mysqli_error($conn);
    // }
}




$fetch_query = "SELECT * FROM users";
$fetch = mysqli_query($conn, $fetch_query);
?>
    <?php include ('sidebar.php'); ?>
    <?php 
    if(isset($_SESSION['userData']) && $_SESSION['userData']['role'] == 'admin'){
    ?>
        <!-- partial -->
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">All Users</h4>
                                </div>
                            </div>
                            <div class="table-responsive mt-1">
                                <table class="table select-table">
                                    <thead>
                                    <tr>
                                        <!-- <th>
                                        <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false" id="check-all"><i class="input-helper"></i></label>
                                        </div>
                                        </th> -->
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row = mysqli_fetch_assoc($fetch)){?>
                                        <tr>
                                            <!-- <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                            </td> -->
                                            <td>
                                            <div class="d-flex ">
                                                <img src="profilePictures/<?php echo $row['profile_image']; ?>" alt="" onerror="this.src='assets/images/default.png';" >
                                                <div>
                                                    <h6><?php echo $row['first_name'] . ' '. $row['last_name']?></h6>
                                                </div>
                                            </div>
                                            </td>
                                            <td>
                                                <h6><?php echo $row['email']; ?></h6>
                                            </td>
                                            <td>
                                                <h6><?php echo $row['phone'] > 1 ?($row['phone']) : "<span class='text-success'>Not Added</span>"; ?></h6>
                                            </td>
                                            <td>
                                            <a href="update.php?id=<?php echo $row['id']; ?>"><button name="update" class="btn btn-primary me-2">Update</button></a>
                                            <a href="users.php?del=<?php echo (int)$row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');"><button name="delete" class="btn btn-danger">
                                                Delete
                                            </button></a>
                                            </td>
                                        </tr> 
                                    <?php }?>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <table border="1">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
            </tr>
            <?php //while($row = mysqli_fetch_assoc($fetch)){?>
            <tr>
                <td><?php //echo $row['first_name']?></td>
                <td><?php //echo $row['last_name']?></td>
                <td><?php //echo $row['email']?></td>
            </tr>
           
        </table> -->

        <?php
    }
    else{
      echo "You don't have access to this page";
    }
    ?>

<?php
include ('footer.php');


?>