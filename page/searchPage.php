<?php
        include '../component/sidebar.php';
?>
    <body>
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
                            $data = $_SESSION['search'];
                            $sql = "SELECT * FROM buku WHERE judul LIKE '%$data%'";
                            $result = mysqli_query($con, $sql);
                            while($search = mysqli_fetch_assoc($result)){
                                echo'
                                <div class="col">
                                    <div class="card" style="max-width:240px; margin-top:20px;">
                                        <img
                                            class="card-img-top"
                                            src="'.$search['link_gambar'].'"
                                            style="width:230px; height:300px;"
                                            alt="Card image cap"
                                            style="height:250px; object-fit:cover; "
                                        >
                                        <div class="card-body">
                                            <h5 class="card-title">'.$search['judul'].'</h5>
                                        </div>
                                            
                                        <a href= "../process/detailBookProcess.php?id='.$search['id'].'" >
                                            <button class="btn btn-info" style="align-content: space-around;">Detail</button>
                                        </a>
                                    </div>
                                </div>
                     '; }?>
                </div>
            </div>
        </div>
    </body>
</html>