<?= $this->extend('layout_user'); ?>

<?= $this->section('content'); ?>

<?php if (session('msg')) : ?>
  <div class="alert alert-info alert-dismissible">
    <?= session('msg') ?>
  </div>
<?php endif ?>


<div class="row">
  <div class="col-md-9">
    <form action="<?php echo base_url('user/upload'); ?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="form-group">
        <label for="tiket">Nomor Tiket</label>
        <input type="text" name="tiket" id="tiket" class="form-control" required>
      </div>
      <br>
      <div class="form-group">
        <input type="file" name="file[]" class="form-control" id="file" multiple>
      </div>
      <br>
      <div class="form-group">
        <button type="submit" id="send_form" class="btn btn-outline-secondary"><span>Submit</span></button>
      </div>

    </form>
  </div>
</div>


<?= $this->endSection(); ?>