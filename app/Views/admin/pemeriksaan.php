<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>

<br>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#formatModal">
            Tambah Format
        </button>
    </div>
    <ul class="list-group list-group-flush">
        <?php foreach ($format as $f) : ?>
            <li class="list-group-item">
                <p class="fst-normal"><?= $f['title']; ?> <a href="<?= $f['link']; ?>" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ke google-docx"><i class="fas fa-file"></i></a></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="formatModal" tabindex="-1" aria-labelledby="formatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formatModalLabel">Tambah Format</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahFormat'); ?>" method="post">
                    <div class="row mb-3">
                        <select class="form-select" aria-label="Default select example" name="head">
                            <option selected>Head</option>
                            <option value="pulbaket">Pulbaket</option>
                            <option value="pemeriksaan">Pemeriksaan</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="title" id="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="link" id="link">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark btn-sm">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>