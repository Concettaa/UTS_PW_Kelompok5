<?php

    if(isset($_POST['update'])){
        include ('../db.php');

        $id = $_POST['id'];
        $nama = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $query = mysqli_query($con, 
        "UPDATE loginadmin SET 
            nama = '$nama',  
            username = '$username',  
            email = '$email' 
        WHERE  id = '$id'") 
        or die(mysqli_error($con));

        if($query){
            session_start();
            $_SESSION['user'] = $_POST['username'];
            echo '<script> alert("Edit Success"); window.location = "../adminPage/dashboardAdminPage.php" </script>';
        }else{
            echo '<script> alert("Edit Failed"); </script>';
        }
    }else if(isset($_POST['cancel'])){
        echo '<script> alert("Edit is Cancelled"); window.location = "../adminPage/dashboardAdminPage.php" </script>';
    }else{
        echo '<script>  window.history.back() </script>';
    }

?>