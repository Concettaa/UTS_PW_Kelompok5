<?php
    include '../component/sidebar.php'
?>

<div class="content" style="margin-left: 50px;">
    <div class="header" style="margin-top: 10px;">
        <div class="body" style="margin-top:20px;">
        <?php
            $buku = $_SESSION['id_buku'];
            $sql = "SELECT * FROM buku WHERE id = '$buku'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <h3><?php echo $row['judul']?></h3>
        <hr>
        <p style="width:1000px"><?php echo $row['isi']?></p>
        </div>
    </div>
</div>