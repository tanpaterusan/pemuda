<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1dde3d5d42.js" crossorigin="anonymous"></script>
    <title><?= $title; ?></title>
</head>

<div class="container">
    <div class="col-lg my-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="navbar-brand" href="<?= base_url('admin/index'); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="navbar-brand" href="<?= base_url('admin/log'); ?>">Aktivitas</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="navbar-brand" href="<?= base_url('admin/pulbaket'); ?>">Pulbaket</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="navbar-brand" href="<?= base_url('admin/pemeriksaan'); ?>">Pemeriksaan</a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Verifikasi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= base_url('admin/pre'); ?>">Pre-Verifikasi</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/tahap1'); ?>">Tahap I</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/tahap2'); ?>">Tahap II</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('admin/tahap3'); ?>">Tahap III</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul>
                    <a class="nav-item nav-link" href="<?= base_url('/logout'); ?>">logout</a>
                </ul>
            </div>
        </nav>


        <hr class="dropdown-divider">


        <body>
            <center>
                <h1><?= $title; ?></h1>
            </center>

            <?= $this->renderSection('content'); ?>

            <footer>
                <!-- Optional JavaScript; choose one of the two! -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function() {
                        $(document).on('click', '.verif', function() {
                            var id = $(this).data('id');
                            var ket = $(this).data('ket');
                            $('#id').val(id);
                            // $('#ket').text(ket);
                        })
                    })
                </script>
            </footer>
    </div>
</div>
</body>

</html>