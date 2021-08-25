<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<?php if (!empty(session()->getFlashdata('pesan'))) : ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<br>
<div class="container">


    <div class="card">
        <div class="card-header">
            Rekap Pengaduan sampai dengan hari ini <strong><?= date('d/m/Y'); ?></strong>
        </div>
        <div class="mx-3 mt-3">
            <table class="table table-bordered" style="text-align:center;">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col">Baru</th>
                        <th scope="col">Tahap I</th>
                        <th scope="col">Tahap II</th>
                        <th scope="col">Tahap III</th>
                        <th scope="col">Stop</th>
                        <th scope="col">Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Total</th>
                        <td><?= $baru; ?></td>
                        <td><?= $lanjut1; ?></td>
                        <td><?= $lanjut2; ?></td>
                        <td><?= $lanjut3; ?></td>
                        <td><?= $stop; ?></td>
                        <td><?= $selesai; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <br><br>

    <div class="card">
        <div class="card-header">
            <strong><?= $title; ?></strong>
        </div>
        <div class="mx-3 mt-3">

            <table class="table table-bordered" style="text-align: center;">
                <?php if ($aduan == null) : ?>
                    <span>
                        Belum ada aktivitas
                    </span>
                <?php else : ?>
                    <tr>
                        <th>Tanggal Masuk</th>
                        <th>Nomor Tiket</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                    <?php foreach ($aduan as $a) : ?>
                        <tr>
                            <td><?= date('d F Y', $a['tgl_masuk']); ?></td>
                            <td><?= $a['tiket']; ?></td>
                            <td style="width:700px">
                                <?php if ($a["status"] == "baru") : ?>
                                    <button style="width:700px" class="btn btn-info">Diterima</button>
                                <?php elseif ($a["status"] == "lanjut1") :  ?>
                                    <button style="width:700px" class="btn btn-warning">Lanjut ke Tahap I</button>
                                <?php elseif ($a["status"] == "lanjut2") :  ?>
                                    <button style="width:700px" class="btn btn-warning">Lanjut ke Tahap II</button>
                                <?php elseif ($a["status"] == "lanjut3") :  ?>
                                    <button style="width:700px" class="btn btn-warning">Lanjut ke Tahap III</button>
                                <?php elseif ($a["status"] == "stop") : ?>
                                    <button style="width:700px" class="btn btn-danger">Tidak Ditindaklanjuti</button>
                                <?php else : ?>
                                    <button style="width:700px" class="btn btn-success">Selesai</button>
                                <?php endif; ?>
                            </td>
                            <td width="150px">
                                <a class="btn btn-dark btn-sm" href="/admin/detail/<?= $a['id']; ?>">detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        <?php endif; ?>

        </div>
    </div>

    <?= $this->endSection(); ?>