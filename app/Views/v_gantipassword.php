<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5>Ganti Password</h5>
                </div>
                <ul class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/home"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
                    <li class="breadcrumb-item"><a href="#">Ganti Password</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success icons-alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled"></i>
        </button>
        <?php echo session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Ganti Password</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm">
                    <label>Password Lama *</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="lama" name="lama" required>
                    </div>
                    <label>Password Baru *</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="baru" name="baru" required>
                    </div>
                    <label>Ulangi Password Baru *</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="baruulang" name="baruulang" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-4">Update</button>
                    <a href="/home" class="btn btn-danger mt-3 mb-4 ml-1">Batal</a>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>