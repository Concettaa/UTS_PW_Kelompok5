<?php

    if(isset($_POST['update'])){
        include ('../db.php');

        $id = $_POST['id'];
        $nama = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenisKelamin'];
        $tanggal_lahir = $_POST['birthdate'];
        $email = $_POST['email'];
        

        $query = mysqli_query($con, 
        "UPDATE login SET 
            nama = '$nama',  
            username = '$username', 
            password = '$password',  
            alamat = '$alamat', 
            jenis_kelamin = '$jenis_kelamin', 
            tanggal_lahir = '$tanggal_lahir', 
            email = '$email' 
        WHERE  id = '$id'") 
        or die(mysqli_error($con));

        if($query){
            session_start();
            $_SESSION['user'] = $_POST['username'];
            echo '<script> alert("Edit Success"); window.location = "../page/dashboardPage.php" </script>';
        }else{
            echo '<script> alert("Edit Failed"); </script>';
        }
    }else if(isset($_POST['cancel'])){
        echo '<script> alert("Edit is Cancelled"); window.location = "../page/dashboardPage.php" </script>';
    }else if(isset($_POST['delete'])){
        include ('../db.php');
        session_start();
        
        $username = $_SESSION['user'];
        $queryDelete = mysqli_query($con, "DELETE FROM login WHERE username='$username'") or die(mysqli_error($con));
        
        if($queryDelete){
            echo
            '<script> alert("Delete Success"); window.location = "../page/loginPage.php" </script>';
        }else{
            echo
            '<script> alert("Delete Failed"); window.location = "../page/editProfilePage.php" </script>';
        }
    }else{
        echo '<script>  window.history.back() </script>';
    }

?>