<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5>Donatur</h5>
                </div>
                <ul class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/home"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item"><a href="#">Donatur</a></li>
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
            <a href="/carstype/exportPdf" class="btn btn-success float-right pdf" target="_blank"><i class="icofont icofont-print"></i> Print</a>
        </div>
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

<form method="POST" action="/donatur/save" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Tambah Donatur</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-2">
                        <label>Nama *</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama" id="nama" name="nama" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Alamat *</label>
                        <input type="text" class="form-control" placeholder="Masukan Alamat" id="alamat" name="keterangan" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>No. Hp *</label>
                        <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="Masukan No. Hp" id="nohp" name="nohp" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-2 mb-2" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" action="/donatur/update" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Edit Donatur</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mb-3">
                        <label>Nama *</label>
                        <input type="text" class="form-control nama" placeholder="Masukan Nama" id="nama" name="nama" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Alamat *</label>
                        <input type="text" class="form-control alamat" placeholder="Masukan Alamat" id="alamat" name="alamat" required autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>No. Hp *</label>
                        <input type="text" class="form-control nohp" onkeypress="return hanyaAngka(event)" placeholder="Masukan No. Hp" id="nohp" name="nohp" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-secondary mt-2 mb-2" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form method="POST" action="/donatur/delete" enctype="">
    <?= csrf_field(); ?>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title"> Konfirmasi Hapus Donatur</h6>
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
                    <button type="button" class="btn btn-secondary mt-2 mb-2" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 mr-2">Yakin</button>
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
        const nama = $(this).data('nama');
        const alamat = $(this).data('alamat');
        const nohp = $(this).data('nohp');
        $('.id').val(id);
        $('.nama').val(nama);
        $('.alamat').val(alamat);
        $('.nohp').val(nohp);
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