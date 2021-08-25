<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <strong>Detail Pengaduan</strong>
        </div>
        <div class="mx-3 mt-3">
            <table class="table table-bordered" style="text-align: center;">
                <?php if ($log == null) : ?>
                    <span>
                        Belum ada aduan masuk
                    </span>
                <?php else : ?>
                    <tr>
                        <th>Time</th>
                        <th>Username</th>
                        <th>Aktivitas</th>
                    </tr>
                    <?php foreach ($log as $l) : ?>
                        <tr>
                            <td><?= date('d/m/Y, h:i:s A', $l['time']); ?></td>
                            <td><?= $l['username']; ?></td>
                            <td><?= $l['act']; ?></td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        <?php endif; ?>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>