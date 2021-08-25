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
                    Belum ada aduan tahap tiga
                </span>
            <?php else : ?>
                <tr>
                    <th>Tanggal Masuk</th>
                    <th>Nomor Tiket</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($aduan as $a) : ?>
                    <tr>
                        <td><?= date('d F Y', $a['tgl_masuk']); ?></td>
                        <td><?= $a['tiket']; ?></td>
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
                            <a class="btn btn-dark btn-sm" href="/admin/detail/<?= $a['id']; ?>">detail</a>
                            <button type="button" class="btn btn-dark btn-sm verif" data-bs-toggle="modal" data-bs-target="#verifModal" data-id="<?= $a['id']; ?>" data-ket="<?= $a['ket']; ?>">
                                verifikasi
                            </button>
                            <a class="btn btn-dark btn-sm" href="<?= base_url('admin/file'); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Upload dokumen tindak lanjut"><i class="fas fa-upload"></i></a>
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
                <h5 class="modal-title" id="verifModalLabel">Verifikasi Tahap III</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/verif3'); ?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-check">
                        <label class="form-check"><strong>Verifikasi</strong></label>
                        <input class="form-check-input" type="radio" name="status" id="stop" value="stop">Kembalikan Pengaduan<br>
                        <input class="form-check-input" type="radio" name="status" id="selesai" value="selesai">Pengaduan Selesai<br>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" type="text" id="ket" name="ket" style="height: 100px" value="ket">
                        <label for="ket">Kesimpulan</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" id="submit" class="btn btn-dark">Verif</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>


<?= $this->endSection(); ?>