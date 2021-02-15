<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5>Dashboard</h5>
                </div>
                <ul class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/home"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item"><a href="#">Uang Masuk</a></li>
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
            <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah Data</button>
            <a href="/carstype/exportPdf" class="btn btn-success float-right pdf" target="_blank"><i class="icofont icofont-print"></i></a>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10%">No.</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($cashin as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['tanggal']; ?></td>
                                <td> <?= $row['keterangan']; ?></td>
                                <td> <?= "Rp. " . number_format($row['jumlah']); ?></td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn-sm btn-primary btn-update" data-id="<?= $row['id']; ?>" data-tanggal="<?= $row['tanggal']; ?>" data-keterangan="<?= $row['keterangan']; ?>" data-jumlah="<?= $row['jumlah']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                    <a href="#" class="btn-sm btn-danger btn-delete" data-id="<?= $row['id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                                    <!-- <a href="#" class="btn-mini btn-warning btn-detail" data-id="<?= $row['id']; ?>"><i class="icofont icofont-search-alt-1"></i></a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="/uangmasuk/save" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Tambah Uang Masuk</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-2">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" placeholder="Masukan Keterangan" id="keterangan" name="keterangan" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="Masukan Jumlah" id="jumlah" name="jumlah" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" action="cashin/update" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Edit Uang Masuk</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-3">
                        <label>Tanggal *</label>
                        <input type="date" class="form-control tanggal" id="tanggal" name="tanggal" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Keterangan *</label>
                        <input type="text" class="form-control keterangan" placeholder="Masukan Keterangan" id="keterangan" name="keterangan" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Jumlah *</label>
                        <input type="text" class="form-control jumlah" pattern="[0-9]" placeholder="Masukan Jumlah" id="jumlah" name="jumlah" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default btn-sm waves-effect " data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light ">Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" action="cashin/delete" enctype="">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Konfirmasi Hapus Uang Masuk</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-12 col-lg-12">
                            <label for="userName-2" class="block">Yakin ingin menghapus data ini?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default btn-sm waves-effect " data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light ">Yakin</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $('.btn-delete').on('click', function() {
        const id = $(this).data('id');
        $('.id').val(id);
        $('#deleteModal').modal('show');
    });

    $('.btn-update').on('click', function() {
        const id = $(this).data('id');
        const tanggal = $(this).data('tanggal');
        const ket = $(this).data('keterangan');
        const jumlah = $(this).data('jumlah');
        $('.id').val(id);
        $('.tanggal').val(tanggal);
        $('.keterangan').val(ket);
        $('.jumlah').val(jumlah);
        $('#updateModal').modal('show');
    });

    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>
<?= $this->endSection(); ?>