<?php
        include '../component/sidebar.php';
        //tes loop data (anggap aja dummy dari database)
        // $imageSource = array(
        //     "https://www.gramedia.com/blog/content/images/2019/06/rich_people_problem.jpg"
        // )
?>
<html>
    <body>
        <div class="content" style="margin-left: 50px;">
            <div class="header" style="margin-top: 10px;">
                <div class="body" style="margin-top:20px;">
                    <h3 class="title">Detail Buku</h3>
                    <div class="row">
                    <?php 
                        $buku = $_SESSION['buku'];
                        $sql = "SELECT * FROM buku WHERE id_buku = '$buku'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>   
                        <div class="col">
                     
                            <div class="card" style="max-width:240px; margin-top:20px; margin-bottom: 20px;">
                                <img
                                    class="card-img-top"
                                    src="<?php echo $row['link_gambar']?>"
                                    alt="Card image cap"
                                    style="height:200%; object-fit:cover;margin:auto"
                                >
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <br>
                            <div class="container-lg mx-4">
                                <h5 class="title">Judul</h5>
                                    <h6><?php echo $row['judul']?></h6>
                                    <br>
                                <h5>Tahun Terbit</h5>
                                    <h6><?php echo $row['tahun_terbit']?></h6>
                                    <br>
                                <h5>Genre</h5>
                                    <h6><?php echo $row['genre']?></h6>
                                    <br>
                                    <br>
                                <a href="#" class="btn btn-primary">Baca sekarang</a>
                                    <br>
                                    <br>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h5 class="desc">Deskripsi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</html>