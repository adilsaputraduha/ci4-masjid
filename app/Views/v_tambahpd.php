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
                    <input type="hidden" id="id" name="id">
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

<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Bulan</label>
                    <div class="input-group mb-3">
                        <select name="bulan" id="bulan" class="form-control" required>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Jumlah</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                        <div class="input-group-append">
                            <button class="btn btn-success ml-2" type="button" onclick="tambah()">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
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
                                    <a href="#" class="btn-sm btn-danger btn-delete" data-id="<?= $row['id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <hr>
            <button type="button" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-danger ml-1">Batal</button>
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
                            <th>Jumlah</th>
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
                                <td> <?= "Rp. " . number_format($row['jumlah']); ?></td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn-sm btn-success btn-pilih" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>" data-jumlah="<?= $row['jumlah']; ?>"><i class="icofont icofont-hand-left"></i></a>
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


<script>
    $('.btn-pilih').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const alamat = $(this).data('alamat');
        const jumlah = $(this).data('jumlah');
        $('#id').val(id);
        $('#nama').val(nama);
        $('#alamat').val(alamat);
        $('#jumlah').val(jumlah);
        $('#cariDonatur').modal('hide');
    });
</script>

<?= $this->endSection(); ?>