<?php
        include '../component/sidebar.php';
?>
        <div class="content" style="margin-left: 50px;">
            <div class="header" style="margin-top: 10px;">
                <h2> Welcome</h2>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Search</span>
                    </div>
                    <form class="row g-3" action="../process/searchProcess.php" method="post">
                        <div class="col-auto">
                            <input type="text" id="search" name="search" class="form-control" placeholder="ketik disini.." aria-label="Search" value="search" style="width: 1000px">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-primary" name="searchButton">Search</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="body" style="margin-top:20px;">
                <h3 class="title">List Buku</h3>
                <div class="row">
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM buku") or die(mysqli_error($con));
                        while($buku = mysqli_fetch_assoc($query)){
                            echo'
                            <div class="col">
                                <div class="card" style="max-width:240px; margin-top:20px;">
                                    <img
                                        class="card-img-top"
                                        src="'.$buku['link_gambar'].'"
                                        style="width:230px; height:300px;"
                                        alt="Card image cap"
                                        style="height:250px; object-fit:cover; "
                                    >
                                    <div class="card-body">
                                        <h5 class="card-title">'.$buku['judul'].'</h5>
                                    </div>
                                        
                                    <a href= "../process/detailBookProcess.php?id='.$buku['id'].'" >
                                        <button type="submit" class="btn btn-primary">Detail</button>
                                    </a>
                                </div>
                            </div>
                        ';} ?>
                </div>
            </div>
        </div>
    </aside>
    </body>
</html>