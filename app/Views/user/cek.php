<?= $this->extend('layout_user'); ?>

<?= $this->section('content'); ?>
<br>

<?php
if (session('msg')) : ?>
    <div class="alert alert-warning text-center" role="alert">
        <h4 class="alert-heading">Status Pengaduan Anda Saat ini</h4>
        <?= session('msg'); ?>
        <p class="mb-0">Untuk informasi lebih lanjut silakan menghubungi Kantor Wilayah Direktorat Jenderal Perbendaharaan Provinsi Maluku melalui nomor 085336643226</p>
    </div>
<?php endif; ?>


<div class="row mt-5">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">isikan nomor tiket Anda</h5>

            <form action="<?= base_url('user/status'); ?>" method="get">
                <input type="text" name="tiket" id="tiket" class="form-control">
                <br>
                <button class="btn btn-primary" type="submit" name="submit">cek status</button>
            </form>

        </div>
        <div class="card-footer text-muted">
            <?= date('d F Y'); ?>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>