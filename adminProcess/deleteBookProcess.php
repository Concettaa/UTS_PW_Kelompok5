<?php
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id='$id'") or die(mysqli_error($con));
        
        if($queryDelete){
            echo
            '<script> alert("Delete Success"); window.location = "../adminPage/dashboardAdminPage.php" </script>';
        }else{
            echo
            '<script> alert("Delete Failed"); window.location = "../adminPage/dashboardAdminPage" </script>';
        }
?>