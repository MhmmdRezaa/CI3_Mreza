<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah User</title>
</head>
<body>

    <!--Navbar  -->
    <div class="container">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo base_url('index.php/user')?>">Data User</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/user')?>"></a>
                        </li>
                    </ul>
                    <form class="d-flex">
                    <input name="username" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4 mx-auto">
                        <div class="card bg-dark text-white">
                            <h4 class="card-header text-center">
                                Form Tambah User
                            </h4>
                            <div class="card-body">
                               <form action="<?php echo base_url("index.php/user/action_tambah") ?>" method="post">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <div class="card-footer text-muted mt-3 bg-dark text-white">
                                        <div class="d-grid gap-2 col-8 mx-auto">
                                            <button class="btn btn-outline-light" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>