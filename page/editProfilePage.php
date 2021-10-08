<?php
    include '../component/sidebar.php'
?>
<br>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="bg bg-light text-dark">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
            <div class="card-header fw-bold" style="text-align: center">Edit Profile</div>
                <div class="card-body">
                    <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM login WHERE id = '$id'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $row['nama']?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?php echo $row['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Jenis Kelamin</label>
                                <div class="form-group">
                                    <?php
                                        if($row['jenis_kelamin'] == "Pria"){
                                            echo '<input class="form-check-input" type="radio" name="jenisKelamin" checked>';
                                            echo '<label class="form-check-label" for="pria" value="Pria" >Pria</label>';
                                        }else{
                                            echo '<input class="form-check-input" type="radio" name="jenisKelamin" checked>';
                                            echo '<label class="form-check-label" for="wanita" value="Wanita"> Wanita </label>';
                                        }                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birthdate" style="width: 500px" value="<?php echo $row['tanggal_lahir'] ?>">
                        </div>
                                
                
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                    </form>
                    <?php
                        }else{
                            echo "No Record Found";
                        }
                    ?>
                </div>
        </div>
    </div>
</body>
</html>