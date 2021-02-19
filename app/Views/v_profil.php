<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5>Profil</h5>
                </div>
                <ul class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/home"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Profil</a></li>
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

<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>Profil</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm">
                        <label>Email *</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light" value="<?= user()->email; ?>" id="email" name="email" required>
                        </div>
                        <label>Username *</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light" value="<?= user()->username; ?>" id="username" name="username" required>
                        </div>
                        <label>Nama Lengkap *</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light" value="<?= user()->fullname; ?>" id="fullname" name="fullname" required>
                        </div>
                        <label>Foto *</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-light" value="<?= user()->user_image; ?>" id="image" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-4">Update</button>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>

<?= $this->endSection(); ?>