<?php
        include '../component/sidebar.php';
        //tes loop data (anggap aja dummy dari database)
        $imageSource = array(
            "https://marketplace.canva.com/EAEfuDTGX5Q/1/0/1003w/canva-sampul-buku-foto-arsitektur-biru-kehijauan-f6jN7aTZxng.jpg",
            "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/investing-book-cover-template-design-b1f6088f2d5866ef6dd3448bcca22447_screen.jpg?ts=1599462747",
            "https://www.gramedia.com/blog/content/images/2019/06/rich_people_problem.jpg",
            "https://cf.shopee.co.id/file/d750a9a1ca5a1b97fb9f00439e579e2b",
            "https://cdn.idntimes.com/content-images/community/2020/06/buku-1-a73e91f596ad93a552d5afc14c245b5a.jpg"
        )
?>
<html>
    <body>
        <div class="content" style="margin-left: 50px;">
            <div class="header" style="margin-top: 10px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Search</span>
                    </div>
                    <input type="text" class="form-control" placeholder="ketik disini.." aria-label="Search" aria-describedby="basic-addon1">
                    <button type="button" class="btn btn-outline-primary">Search</button>
                    
                </div>
            </div>
            <div class="body" style="margin-top:20px;">
                    <h3 class="title">List Buku</h3>
                    <div class="row">
                        <?php foreach($imageSource as $imgSrc): ?>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="card" style="max-width:240px; margin-top:20px;">
                                <img
                                    class="card-img-top"
                                    src="<?= $imgSrc; ?>"
                                    alt="Card image cap"
                                    style="height:250px; object-fit:cover; "
                                >
                                <div class="card-body">
                                    <h5 class="card-title">Judul Buku</h5>
                                    <p class="card-text">Deskripsi singkat buku</p>
                                </div>
                                <button class="btn btn-info" style="align-content: space-around;">Detail</button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </body>
    
</html>