<?php
        include ('../db.php');
        $username = $_SESSION['user'];
        $queryDelete = mysqli_query($con, "DELETE FROM login WHERE username='$username'") or die(mysqli_error($con));
        
        if($queryDelete){
            echo
            '<script> alert("Delete Success"); window.location = "../page/loginPage.php" </script>';
        }else{
            echo
            '<script> alert("Delete Failed"); window.location = "../page/editProfilePage.php" </script>';
        }
?>