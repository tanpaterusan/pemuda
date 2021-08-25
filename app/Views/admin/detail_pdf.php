<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Aduan</title>
</head>

<body>
    <div class="container">
        <div style="text-align:center;" class="card-header">
            <h4>
                Detail Aduan
            </h4>
            <p class="card-text"><small class="text-muted">Dikirim pada tanggal : <?= date('d F Y', $aduan['tgl_masuk']); ?></small></p>
        </div>
        <table>
            <tr>
                <th width="20px">1</th>
                <th width="150px">Jenis</th>
                <td width="350px"><?= $aduan['jenis']; ?></td>
            </tr>
            <tr>
                <th>2</th>
                <th>Perihal</th>
                <td><?= $aduan['perihal']; ?></td>
            </tr>
            <tr>
                <th>3</th>
                <th>Tempat</th>
                <td><?= $aduan['tempat']; ?></td>
            </tr>
            <tr>
                <th>4</th>
                <th>Waktu</th>
                <td><?= $aduan['waktu']; ?></td>
            </tr>
            <tr>
                <th>5</th>
                <th>Nama Terlapor</th>
                <td><?= $aduan['terlapor']; ?></td>
            </tr>
            <tr>
                <th>6</th>
                <th>Uraian</th>
                <td><?= $aduan['uraian']; ?></td>
            </tr>
            <tr>
                <th>7</th>
                <th>Nama Pelapor</th>
                <td><?= $aduan['pelapor']; ?></td>
            </tr>
            <tr>
                <th>8</th>
                <th>No Telepon Pelapor</th>
                <td><?= $aduan['telp']; ?></td>
            </tr>
            <tr>
                <th>9</th>
                <th>Tambahan Keterangan dari UKI-W</th>
                <td><?= $aduan['ket']; ?></td>
            </tr>
        </table>
    </div>

    <footer>
        <style>
            table,
            th,
            td {
                border: 0.5px solid black;
                text-align: justify;
                /* border-collapse: collapse; */
            }
        </style>
    </footer>
    </div>

</body>

</html>