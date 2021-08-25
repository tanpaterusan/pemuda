<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<?php if (!empty(session()->getFlashdata('pesan'))) : ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<br>
<div class="container">

    <table class="table table-bordered" style="text-align:center;">
        <thead>
            <tr>
                <th></th>
                <th scope="col">Baru</th>
                <th scope="col">lanjut I</th>
                <th scope="col">lanjut II</th>
                <th scope="col">lanjut III</th>
                <th scope="col">Stop</th>
                <th scope="col">Selesai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Januari</th>
                <td><?= $baru_jan; ?></td>
                <td><?= $lanjut1_jan; ?></td>
                <td><?= $lanjut2_jan; ?></td>
                <td><?= $lanjut3_jan; ?></td>
                <td><?= $stop_jan; ?></td>
                <td><?= $selesai_jan; ?></td>
            </tr>
            <tr>
                <th scope="row">Februari</th>
                <td><?= $baru_feb; ?></td>
                <td><?= $lanjut1_feb; ?></td>
                <td><?= $lanjut2_feb; ?></td>
                <td><?= $lanjut3_feb; ?></td>
                <td><?= $stop_feb; ?></td>
                <td><?= $selesai_feb; ?></td>
            </tr>
            <tr>
                <th scope="row">Maret</th>
                <td><?= $baru_mar; ?></td>
                <td><?= $lanjut1_mar; ?></td>
                <td><?= $lanjut2_mar; ?></td>
                <td><?= $lanjut3_mar; ?></td>
                <td><?= $stop_mar; ?></td>
                <td><?= $selesai_mar; ?></td>
            </tr>
            <tr>
                <th scope="row">April</th>
                <td><?= $baru_apr; ?></td>
                <td><?= $lanjut1_apr; ?></td>
                <td><?= $lanjut2_apr; ?></td>
                <td><?= $lanjut3_apr; ?></td>
                <td><?= $stop_apr; ?></td>
                <td><?= $selesai_apr; ?></td>
            </tr>
            <tr>
                <th scope="row">Mei</th>
                <td><?= $baru_may; ?></td>
                <td><?= $lanjut1_may; ?></td>
                <td><?= $lanjut2_may; ?></td>
                <td><?= $lanjut3_may; ?></td>
                <td><?= $stop_may; ?></td>
                <td><?= $selesai_may; ?></td>
            </tr>
            <tr>
                <th scope="row">Juni</th>
                <td><?= $baru_jun; ?></td>
                <td><?= $lanjut1_jun; ?></td>
                <td><?= $lanjut2_jun; ?></td>
                <td><?= $lanjut3_jun; ?></td>
                <td><?= $stop_jun; ?></td>
                <td><?= $selesai_jun; ?></td>
            </tr>
            <tr>
                <th scope="row">Juli</th>
                <td><?= $baru_jul; ?></td>
                <td><?= $lanjut1_jul; ?></td>
                <td><?= $lanjut2_jul; ?></td>
                <td><?= $lanjut3_jul; ?></td>
                <td><?= $stop_jul; ?></td>
                <td><?= $selesai_jul; ?></td>
            </tr>
            <tr>
                <th scope="row">Agustus</th>
                <td><?= $baru_aug; ?></td>
                <td><?= $lanjut1_aug; ?></td>
                <td><?= $lanjut2_aug; ?></td>
                <td><?= $lanjut3_aug; ?></td>
                <td><?= $stop_aug; ?></td>
                <td><?= $selesai_aug; ?></td>
            </tr>
            <tr>
                <th scope="row">September</th>
                <td><?= $baru_sep; ?></td>
                <td><?= $lanjut1_sep; ?></td>
                <td><?= $lanjut2_sep; ?></td>
                <td><?= $lanjut3_sep; ?></td>
                <td><?= $stop_sep; ?></td>
                <td><?= $selesai_sep; ?></td>
            </tr>
            <tr>
                <th scope="row">September</th>
                <td><?= $baru_sep; ?></td>
                <td><?= $lanjut1_sep; ?></td>
                <td><?= $lanjut2_sep; ?></td>
                <td><?= $lanjut3_sep; ?></td>
                <td><?= $stop_sep; ?></td>
                <td><?= $selesai_sep; ?></td>
            </tr>
            <tr>
                <th scope="row">Oktober</th>
                <td><?= $baru_ok; ?></td>
                <td><?= $lanjut1_ok; ?></td>
                <td><?= $lanjut2_ok; ?></td>
                <td><?= $lanjut3_ok; ?></td>
                <td><?= $stop_ok; ?></td>
                <td><?= $selesai_ok; ?></td>
            </tr>

            <tr>
                <th scope="row">Desember</th>
                <td><?= $baru_nov; ?></td>
                <td><?= $lanjut1_nov; ?></td>
                <td><?= $lanjut2_nov; ?></td>
                <td><?= $lanjut3_nov; ?></td>
                <td><?= $stop_nov; ?></td>
                <td><?= $selesai_nov; ?></td>
            </tr>

            <tr>
                <th scope="row">Desember</th>
                <td><?= $baru_dec; ?></td>
                <td><?= $lanjut1_dec; ?></td>
                <td><?= $lanjut2_dec; ?></td>
                <td><?= $lanjut3_dec; ?></td>
                <td><?= $stop_dec; ?></td>
                <td><?= $selesai_dec; ?></td>
            </tr>

        </tbody>
    </table>

</div>

<?= $this->endSection(); ?>