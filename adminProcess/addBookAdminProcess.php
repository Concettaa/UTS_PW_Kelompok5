<?php
    if(isset($_POST['submit'])){
        include('../db.php');

        $link_gambar = $_POST['imgURL'];
        $judul = $_POST['judul'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $genre = $_POST['genre'];
        $deskrips = $_POST['deskrips'];

        $query = mysqli_query($con,
            "INSERT INTO buku(judul, tahun_terbit, genre, deskripsi, link_gambar)
                VALUES
            ('$judul', '$tahun_terbit', '$genre', '$deskrips', '$link_gambar')")
                or die(mysqli_error($con));

        
        if($query){
            echo
            '<script>
                alert("Register Success"); window.location = "../adminPage/dashboardAdminPage.php";
            </script>';
        }else{
            echo
            '<script>
                alert("Register Failed"); window.location = "../adminPage/dashboardAmdinPage.php";
            </script>';
        }
    }else{
        echo
        '<script>
            window.history.back()
        </script>';
    }
?>