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
                <div class="col-md-6">
                    <input type="hidden" id="id" name="id">
                    <label>Nama Donatur</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" readonly required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Alamat Donatur</label>
                    <div class="input-group">
                        <textarea class="form-control" id="alamat" name="alamat" rows="5" readonly required></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>