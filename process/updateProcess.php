<?php

    if(isset($_POST['edit'])){
        include ('../db.php');

        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $npm = $_POST['npm'];
        $prodi = $_POST['prodi'];
        $query = mysqli_query($con, 
        "UPDATE login SET name = '$name',  username = '$username', password = '$password',  npm = '$npm', prodi = '$prodi' WHERE  id = '$id'") 
        or die(mysqli_error($con));

        if($query){
            echo '<script> alert("Edit Success"); window.location = "../dashboardPage.php" </script>';
        }else{
            echo '<script> alert("Edit Failed"); </script>';
        }
    }else{
        echo '<script>  window.history.back() </script>';
    }

?>