<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1dde3d5d42.js" crossorigin="anonymous"></script>

    <title><?= $title; ?></title>
</head>


<body>

    <div class="container text-center">
        <div class="mt-5">
            <div class="card text-dark bg-light">

                <div class="card-body">
                    <h1></h1>
                    <!-- Button trigger modal -->
                    <div class="content-end">
                        <a type="button" class="btn btn-success" href="<?= base_url('admin'); ?>">
                            login sebagai admin
                        </a>
                    </div>
                    <br>
                    <h1 class="mb-1">PEMUDA</h1>
                    <h3 class="mb-5"><em>Pengaduan Maluku via Daring</em></h3>

                    <a class="btn btn-primary btn-xl" href="<?= base_url('user/buat'); ?>">buat pengaduan!</a>

                </div>
            </div>
        </div>

</body>

</html>