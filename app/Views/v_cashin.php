<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-wrapper">
    <div class="card">
        <div class="card-block">
            <h5>Uang Masuk</h5>
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="#!">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Transaksi</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Uang Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger icons-alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
            </button>
            <strong> Gagal! Periksa kembali entrian form. </strong>
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success icons-alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled"></i>
            </button>
            <strong> Berhasil! </strong>
            <br>
            <?php echo session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-mat btn-inverse col-2" data-toggle="modal" data-target="#addModal">Tambah Data</button>
                        <a href="/carstype/exportPdf" class="btn btn-mat btn-primary col-2 pdf" target="_blank">Cetak Laporan</a>
                        <div class="card-header-right">
                            <i class="icofont icofont-rounded-down"></i>
                            <i class="icofont icofont-refresh"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
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
                                                <a href="#" class="btn-mini btn-primary btn-update" data-id="<?= $row['id']; ?>" data-tanggal="<?= $row['tanggal']; ?>" data-keterangan="<?= $row['keterangan']; ?>" data-jumlah="<?= $row['jumlah']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#" class="btn-mini btn-danger btn-delete" data-id="<?= $row['id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
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
        </div>
    </div>
</div>

<form method="POST" action="cashin/save" enctype="">
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
                    <div class="col-md-12">
                        <label>Tanggal *</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Keterangan *</label>
                        <input type="text" class="form-control" placeholder="Masukan Keterangan" id="keterangan" name="keterangan" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Jumlah *</label>
                        <input type="text" class="form-control" placeholder="Masukan Jumlah" id="jumlah" name="jumlah" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
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
                    <h6 class="modal-title"> Update Car Type Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Tanggal *</label>
                        <input type="date" class="form-control tanggal" id="tanggal" name="tanggal" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Keterangan *</label>
                        <input type="text" class="form-control keterangan" placeholder="Masukan Keterangan" id="keterangan" name="keterangan" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label>Jumlah *</label>
                        <input type="text" class="form-control jumlah" placeholder="Masukan Jumlah" id="jumlah" name="jumlah" required autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default btn-sm waves-effect " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light ">Save changes</button>
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
                    <h6 class="modal-title"> Confirm Delete Car Type Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div class="col-md-12 col-lg-12">
                            <label for="userName-2" class="block">Are you sure the data is deleted?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-default btn-sm waves-effect " data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light ">Yes</button>
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
</script>
<?= $this->endSection(); ?>