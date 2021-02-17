<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5>Pembayaran Donatur</h5>
                </div>
                <ul class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/home"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item"><a href="#">Pembayaran Donatur</a></li>
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
            <h5>Tambah Pembayaran Donatur</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <label>Nama Donatur</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" readonly required>
                            <div class="input-group-append">
                                <button class="btn btn-primary ml-2" type="button" data-toggle="modal" data-target="#cariDonatur">Cari Data</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label>Alamat Donatur</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="5" readonly required></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12">
    <div class="card">
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($donatur as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['nama']; ?></td>
                                <td> <?= $row['alamat']; ?></td>
                                <td> <?= $row['nohp']; ?></td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn-sm btn-primary btn-update" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>" data-nohp="<?= $row['nohp']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                    <a href="#" class="btn-sm btn-danger btn-delete" data-id="<?= $row['id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="cariDonatur" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"> Pilih Donatur</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="data" class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($donatur as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['nama']; ?></td>
                                <td> <?= $row['alamat']; ?></td>
                                <td> <?= $row['nohp']; ?></td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn-sm btn-success btn-pilih" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>"><i class="icofont icofont-hand-left"></i> Pilih</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary mt-2 mb-2 mr-2" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>