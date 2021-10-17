<?php

    if(isset($_POST['update'])){
        include ('../db.php');
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $deskripsi = $_POST['deskripsi'];

        $query = mysqli_query($con, 
        "UPDATE buku SET 
            judul = '$judul',  
            tahun_terbit = '$tahun_terbit',  
            deskripsi = '$deskripsi' 
        WHERE  id = '$id'") 
        or die(mysqli_error($con));

        echo '<script> alert("Update Success"); window.location = "../adminPage/dashboardAdminPage.php" </script>';
    }else if(isset($_POST['cancel'])){
        echo '<script> alert("Update is Cancelled!"); window.location = "../adminPage/dashboardAdminPage.php" </script>';
    }else{
        echo '<script>  window.history.back() </script>';
    }

?>