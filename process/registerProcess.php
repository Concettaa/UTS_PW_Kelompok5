<?php
    if(isset($_POST['register'])){
        include('../db.php');

        $nama = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenisKelamin'];
        $tanggal_lahir = $_POST['birthdate'];
        $email = $_POST['email'];

        $query = mysqli_query($con,
            "INSERT INTO login(nama, username, password, alamat, jenis_kelamin, tanggal_lahir, email)
                VALUES
            ('$nama', '$username', '$password', '$alamat', '$jenis_kelamin', '$tanggal_lahir', '$email')")
                or die(mysqli_error($con));

        
        if($query){
            echo
            '<script>
                alert("Register Success"); window.location = "../welcomePage.php"
            </script>';
        }else{
            echo
            '<script>
                alert("Register Failed");
            </script>';
        }
    }else{
        echo
        '<script>
            window.history.back()
        </script>';
    }
?>