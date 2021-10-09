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
            echo '<script> alert("Edit Success"); window.location = "../page/dashboardPage.php" </script>';
        }else{
            echo '<script> alert("Edit Failed"); </script>';
        }
    }else{
        echo '<script>  window.history.back() </script>';
    }

?>