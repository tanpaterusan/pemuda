<?= $this->extend('layout_user'); ?>

<?= $this->section('content'); ?>


<form action="<?= base_url('user/save'); ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="row">

        <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <div class="col mt-4">
            <h5>Informasi Aduan</h5>
            <div class="mb-3">
                <label for="perihal" class="form-label">Jenis Aduan</label>
                <select class="form-select" name="jenis" id="jenis" aria-label="Default select example">
                    <option selected>--pilih jenis aduan--</option>
                    <option value="Fraud">Fraud</option>
                    <option value="Pelayanan">Pelayanan</option>
                    <option value="Kode Etik">Kode Etik</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label">Perihal Aduan</label>
                <input type="text" class="form-control" name="perihal" id="perihal" required>
            </div>
            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="tempat" required>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="text" class="form-control" name="waktu" id="waktu" require>
            </div>
            <div class="mb-3">
                <label for="terlapor" class="form-label">Nama Terlapor</label>
                <input type="text" class="form-control" name="terlapor" id="terlapor" required>
            </div>
        </div>

        <div class="col mt-4">
            <div class="mb-3">
                <label for="uraian" class="form-label">
                    <h5>Uraian Pengaduan</h5>
                </label>
                <textarea class="form-control" name="uraian" id="uraian" style="height:500px;" required></textarea>
            </div>
        </div>

        <div class="col mt-4">
            <h5>Identitas Pelapor</h5>
            <div class="mb-3">
                <label for="pelapor" class="form-label">Nama Pelapor</label>
                <input type="text" class="form-control" name="pelapor" id="pelapor" required>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Nomor Telepon yang Dapat Dihubungi</label>
                <input type="text" class="form-control" name="telp" id="telp" required>
            </div>
            <br>
        </div>
        <hr class="divider-sidebar">
        <div style="width:5;height:3;">
            <center>
                <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </center>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>