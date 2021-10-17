<?php
    if(isset($_POST['searchButton'])){
        include ('../db.php');
        session_start();
        $_SESSION['search'] = $_POST['search'];
        echo '<script> alert("Search Success!"); window.location = "../adminPage/searchAdminPage.php" </script>';

    }else{
        echo "No record found";
    }
?>