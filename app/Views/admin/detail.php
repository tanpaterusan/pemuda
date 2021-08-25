<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<br>
<div class="container">
    <div class="col-lg-3">
        <a href="<?= base_url('admin/pdfDetail/' . $aduan['id']); ?>" class="btn btn-dark">export to pdf</a>
    </div>
    <br>
    <div class="card text-dark bg-light mb-3">
        <div style="text-align:center;" class="card-header">
            <h4>
                Detail Aduan
            </h4>
            <p class="card-text"><small class="text-muted"><?= date('d F Y', $aduan['tgl_masuk']); ?></small></p>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="200px">Jenis</th>
                    <td><?= $aduan['jenis']; ?></td>
                </tr>
                <tr>
                    <th>Perihal</th>
                    <td><?= $aduan['perihal']; ?></td>
                </tr>
                <tr>
                    <th>Tempat</th>
                    <td><?= $aduan['tempat']; ?></td>
                </tr>
                <tr>
                    <th>Waktu</th>
                    <td><?= $aduan['waktu']; ?></td>
                </tr>
                <tr>
                    <th>Nama Terlapor</th>
                    <td><?= $aduan['terlapor']; ?></td>
                </tr>
                <tr>
                    <th width="200px">Uraian</th>
                    <td><?= $aduan['uraian']; ?></td>
                </tr>

                <tr>
                    <th>Nama Pelapor</th>
                    <td><?= $aduan['pelapor']; ?></td>
                </tr>
                <tr>
                    <th>No Telepon Pelapor</th>
                    <td><?= $aduan['telp']; ?></td>
                </tr>
                <tr>
                    <th>Tambahan Keterangan dari UKI-W</th>
                    <td><?= $aduan['ket']; ?></td>
                </tr>
                <tr>
                    <th>Bukti Aduan</th>
                    <td>
                        <?php foreach ($bukti as $b) : ?>
                            <li>
                                <?= $b['file']; ?>
                                <a class="btn btn-light" href="<?= base_url('admin/download/' . $b['id']); ?>" onclick="return confirm('Anda yakin ingin mendownload berkas ini?')"><i class="fas fa-download"></i></a>
                            </li>
                        <?php endforeach; ?>
                    </td>
                </tr>
                <tr>
                    <th>Dokumen Tindak Lanjut</th>
                    <td>
                        <?php foreach ($dok as $d) : ?>
                            <li>
                                <?= $d['file']; ?>
                                <a class="btn btn-light" href="<?= base_url('admin/download/' . $d['id']); ?>" onclick="return confirm('Anda yakin ingin mendownload berkas ini?')"><i class="fas fa-download"></i></a>

                            </li>
                        <?php endforeach; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>