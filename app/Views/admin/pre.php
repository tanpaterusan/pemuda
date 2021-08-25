<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="col mt-4">
        <table class="table table-bordered" style="text-align: center;">
            <?php if ($aduan == null) : ?>
                <span>
                    Belum ada aduan masuk
                </span>
            <?php else : ?>
                <tr>
                    <th>Tanggal Masuk</th>
                    <th>Nomor Tiket</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($aduan as $a) : ?>
                    <tr>
                        <td><?= date('d F Y', $a['tgl_masuk']); ?></td>
                        <td><?= $a['tiket']; ?></td>
                        <td><?= $a['telp']; ?></td>
                        <td style="width:200px">
                            <?php if ($a["status"] == "baru") : ?>
                                <button style="width:200px" class="btn btn-info">Diterima</button>
                            <?php elseif ($a["status"] == "lanjut1") :  ?>
                                <button style="width:200px" class="btn btn-warning">Lanjut ke Tahap I</button>
                            <?php elseif ($a["status"] == "lanjut2") :  ?>
                                <button style="width:200px" class="btn btn-warning">Lanjut ke Tahap II</button>
                            <?php elseif ($a["status"] == "lanjut3") :  ?>
                                <button style="width:200px" class="btn btn-warning">Lanjut ke Tahap III</button>
                            <?php elseif ($a["status"] == "stop") : ?>
                                <button style="width:200px" class="btn btn-danger">Tidak Ditindaklanjuti</button>
                            <?php else : ?>
                                <button style="width:200px" class="btn btn-success">Selesai</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm verif" data-bs-toggle="modal" data-bs-target="#verifModal" data-id="<?= $a['id']; ?>">
                                verifikasi
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="verifModal" tabindex="-1" aria-labelledby="verifModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifModalLabel">Apakah nomor telepon bisa dihubungi?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/verif0'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" id="id">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="lanjut1" value="lanjut1">Bisa. Lanjutkan ke Tahap I<br>
                        <input class="form-check-input" type="radio" name="status" id="stop" value="stop">Tidak. Kembalikan Pengaduan<br>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" type="text" name="ket" id="ket" style="height: 100px;">
                        <label for="ket">Tambahkan keterangan</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-dark">Verif</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>


<?= $this->endSection(); ?>