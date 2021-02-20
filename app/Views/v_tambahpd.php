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
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item"><a href="#">Pembayaran Donatur</a></li>
                    <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<form action="/pembayarandonatur/savedetail" method="POST">
    <?= csrf_field(); ?>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Pembayaran Donatur</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php foreach ($donatur as $row) : ?>
                        <div class="col-md-6">
                            <input type="hidden" id="id" name="id" value="<?= $row['id']; ?>">
                            <label>Nama Donatur *</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $row['nama']; ?>" id="nama" name="nama" readonly required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal *</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Alamat Donatur *</label>
                            <div class="input-group">
                                <textarea class="form-control" id="alamat" name="alamat" rows="5" readonly required><?= $row['alamat']; ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" id="id" name="id" value="<?= $row['id']; ?>">
                        <label>Bulan *</label>
                        <div class="input-group mb-3">
                            <select name="bulan" id="bulan" class="form-control" required>
                                <?php foreach ($bulan as $row) : ?>
                                    <option value="<?= $row['idb'] ?>"><?= $row['namabulan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Jumlah *</label>
                        <div class="input-group mb-3">
                            <?php foreach ($donatur as $row) : ?>
                                <input type="text" class="form-control" value="<?= $row['jumlah']; ?>" id="jumlah" name="jumlah" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary ml-2" type="submit">Simpan</button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
</form>
<div class="card-body table-border-style" style="margin-top: -30px;">
    <div class="table-responsive">
        <table class="table table-striped" id="datatable">
            <thead>
                <tr>
                    <th width="10%">No.</th>
                    <th>Bulan</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($detail as $row) : $no++ ?>
                    <tr>
                        <td> <?= $no; ?></td>
                        <td> <?= $row['namabulan']; ?></td>
                        <td> <?= "Rp. " . number_format($row['jumlah']); ?></td>
                        <td style="text-align: center;">
                            <form action="/pembayarandonatur/<?= $row['donatur']; ?>/<?= $row['bulan']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm"><i class="icofont icofont-ui-delete"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <hr>
    <a href="/pembayarandonatur" class="btn btn-success ml-1 float-right">Selesai</a>
</div>
</div>
</div>

<script>
    document.getElementById('tanggal').valueAsDate = new Date();
</script>

<?= $this->endSection(); ?>