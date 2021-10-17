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
                        $username = $_SESSION['user'];
                        $sql = "SELECT * FROM login WHERE username = '$username'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="../process/updateProcess.php" method="post">
                        <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $row['nama'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?php echo $row['username'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Jenis Kelamin</label>
                                    <?php
                                        if($row['jenis_kelamin'] == "Pria"){
                                            echo '<div class="form-group">';
                                            echo '<input class="form-check-input" type="radio" name="jenisKelamin" value="Pria" checked>';
                                            echo '<label class="form-check-label" for="pria" value="Pria" >Pria</label>';
                                            echo '<input class="form-check-input" type="radio" name="jenisKelamin" value="Wanita">';
                                            echo '<label class="form-check-label" for="wanita" value="Wanita"> Wanita </label>';
                                            echo '</div>';
                                        }else if($row['jenis_kelamin'] == "Wanita"){
                                            echo '<div class="form-group">';
                                            echo '<input class="form-check-input" type="radio" name="jenisKelamin" value="Pria">';
                                            echo '<label class="form-check-label" for="pria" value="Pria" >Pria</label>';
                                            echo '<input class="form-check-input" type="radio" name="jenisKelamin" value="Wanita" checked>';
                                            echo '<label class="form-check-label" for="wanita" value="Wanita"> Wanita </label>';
                                            echo '</div>';
                                        }                                    
                                    ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birthdate" style="width: 500px" value="<?php echo $row['tanggal_lahir']; ?>">
                        </div>
                                
                
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success" name="update">Update</button>
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger" name="delete">Delete Account</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>