<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Data User</title>
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Data User</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=" <?php echo base_url('index.php/user/tambah')?> ">Tambah User</a>
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

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <?php if (!empty($data));?>
                <table  class="table table-dark table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>
                            Action
                        </th>
                    </thead>
                    <tbody>
                        <?php $i= 1; ?>
                        <?php foreach ($data as $key => $value): ?> 
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value['username']?></td>
                            <td><?php echo $value['email']?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/user/edit/' .$value['id']) ?>"><i class="fas fa-user-edit"></i></a>
                                <a href="<?php echo base_url('index.php/user/delete/' .$value['id'])?>"><i class="fas fa-user-slash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table> 

        </div>
    </div>
</div>
<!-- Fontawesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>