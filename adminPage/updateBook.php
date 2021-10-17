<?php
        include '../component/sidebarAdmin.php';
?>
<div class="content" style="margin-left: 50px;">
            <div class="header" style="margin-top: 10px;">
                <div class="body" style="margin-top:20px;">
                    <h3 class="title">Detail Buku</h3>
                    <?php 
                        $buku = $_GET['id'];
                        $sql = "SELECT * FROM buku WHERE id = '$buku'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>  
                    <div class="row"> 
                            <div class="col">
                            <center>
                                <div class="card" style="max-width:240px; margin-top:20px; margin-bottom: 20px;">
                                    <img
                                        class="card-img-top"
                                        src="<?php echo $row['link_gambar']?>"
                                        alt="Card image cap"
                                        style="height:200%; object-fit:cover;margin:auto"
                                    >
                                </div>
                            </center>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <br>
                                <form action="../adminProcess/updateBookAdminProcess.php" method="post"  style="width: 700px;">
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                                    <div class="container-lg mx-4">
                                        <h5 class="title">Judul</h5>
                                            <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" value="<?php echo $row['judul']?>">
                                            <br>
                                        <h5>Tahun Terbit</h5>
                                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" aria-describedby="emailHelp" value="<?php echo $row['tahun_terbit']?>">
                                            <br>
                                        <h5>Genre</h5>
                                            <input type="text" class="form-control" id="genre" name="genre" aria-describedby="emailHelp" value="<?php echo $row['genre']?>">
                                            <br>
                                        <h5>Deskripsi</h5>
                                        <input type="text" style="height: 200px;" class="form-control" id="deskripsi" name="deskripsi" 
                                            aria-describedby="emailHelp" value="<?php echo $row['deskripsi']?>">
                                            <br><br>
                                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                                        <button type="submit" class="btn btn-danger" name="cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>

                            
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</html>
    
    