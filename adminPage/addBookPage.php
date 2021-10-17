<?php
        include '../component/sidebarAdmin.php';
?>

<div class="content" style="margin-left: 50px;">
    <div class="header" style="margin-top: 10px;">
        <h2>Add Book</h2>
        <hr>
        <div class="body" style="margin-top:50px;">
        <form action="../adminProcess/addBookAdminProcess.php" method="post"  style="width: 700px;">
            <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                <div class="container-lg mx-4">
                    <h5 class="title">IMG Url</h5>
                    <input type="text" class="form-control" id="imgURL" name="imgURL" aria-describedby="emailHelp">
                    <br>
                    <h5 class="title">Judul</h5>
                    <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp">
                    <br>
                    <h5>Tahun Terbit</h5>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" aria-describedby="emailHelp">
                    <br>
                    <h5>Genre</h5>
                    <input type="text" class="form-control" id="genre" name="genre" aria-describedby="emailHelp">
                    <br>
                    <h5>Deskripsi</h5>
                    <input type="text" style="height: 200px;" class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp">
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>