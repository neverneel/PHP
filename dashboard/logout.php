<?php
    session_start();

// echo "<pre>";
// print_r($_SESSION);



    session_unset();


// if(isset($_SESSION['userData']) && !empty($_SESSION['userData'])){
//     session_unset();
//     header("Location: login.php");
    
// }

    session_destroy();
    header("Location: login.php");
    exit();



?>