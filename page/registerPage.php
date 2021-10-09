<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Register</title>

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    </head> 
    <body>
        <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Brand</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="./registerPage.php" id="linkStyle">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./loginPage.php" id="linkStyle">Login</a>
                </li>
            </ul>
        </div>
        </nav>
        <div class="bg bg-light text-dark">
            <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
                    <div class="card-header fw-bold">Register</div>
                        <div class="card-body" style="width: 600px">
                            <form action="../process/registerProcess.php" method="post" class="row g-3" style="justify-content-end">
                                <div class="mb-3">
                                    <label for="inputName" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" placeholder="name" style="width: 500px">
                                </div>
                                <div class="mb-3">
                                    <label for="inputAddress" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="alamat" style="width: 500px">
                                </div>    
                                <div class="mb-3">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="ABC@XXXXX.com" style="width: 500px">
                                </div>
                                <div class="mb-3">
                                    <label for="inputAddress" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username" style="width: 500px">
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password" style="width: 500px">
                                </div>
                                <div class="mb-3">
                                    <label for="inputAddress" class="form-label">Birth Date</label>
                                    <input type="date" class="form-control" name="birthdate" style="width: 500px">
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">Jenis Kelamin</label>
                                        <div class="form-group">
                                            <input class="form-check-input" type="radio" name="jenisKelamin" value="Pria" checked>
                                            <label class="form-check-label" for="pria" value="Pria" >
                                                Pria
                                            </label>
                                            <input class="form-check-input" type="radio" name="jenisKelamin" value="Wanita">
                                            <label class="form-check-label" for="wanita" value="Wanita">
                                                Wanita
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                        Register Agreement
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" name="register">Submit</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>