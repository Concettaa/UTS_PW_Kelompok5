<?php

if(isset($_GET['id'])){
    include('../db.php'); 

    session_start();
    $_SESSION['id_buku'] = $_GET['id'];
    echo '<script> alert("Show!"); window.location = "../adminPage/detailAdminBookPage.php" </script>';
}else{
    echo '<script> alert("Cant Show"); window.location = "../adminPage/dashboardAdminPage.php" </script>';
}
    

?>