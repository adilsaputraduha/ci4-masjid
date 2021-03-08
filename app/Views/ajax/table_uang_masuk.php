<div class="text-right mr-5 mb-3">
    <h5 class="">Total : <?php foreach ($total as $row) : ?><?= "Rp. " . number_format($row['total']); ?><?php endforeach; ?></h5>
</div>
<table id="datatable" class="table table-striped">
    <thead>
        <tr>
            <th width="8%">No.</th>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($cashin as $row) : $no++ ?>
            <tr>
                <td width="8%"> <?= $no; ?></td>
                <td> <?= $row['tanggal']; ?></td>
                <td> <?= $row['nama']; ?></td>
                <td> <?= "Rp. " . number_format($row['jumlah']); ?></td>
                <td> <?= $row['keterangan']; ?></td>
                <td style="text-align: center;">
                    <a href="#" class="btn-sm btn-primary btn-update" data-id="<?= $row['id']; ?>" data-tanggal="<?= $row['tanggal']; ?>" data-jenispemasukan="<?= $row['idp']; ?>" data-keterangan="<?= $row['keterangan']; ?>" data-jumlah="<?= $row['jumlah']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                    <a href="#" class="btn-sm btn-danger btn-delete" data-id="<?= $row['id']; ?>"><i class="icofont icofont-ui-delete"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $('.btn-delete').on('click', function() {
        const id = $(this).data('id');
        $('.id').val(id);
        $('#deleteModal').modal('show');
    });

    $('.btn-update').on('click', function() {
        const id = $(this).data('id');
        const tanggal = $(this).data('tanggal');
        const jenispemasukan = $(this).data('jenispemasukan');
        const ket = $(this).data('keterangan');
        const jumlah = $(this).data('jumlah');
        $('.id').val(id);
        $('.tanggal').val(tanggal);
        $('.jenispemasukan').val(jenispemasukan);
        $('.keterangan').val(ket);
        $('.jumlah').val(jumlah);
        $('#updateModal').modal('show');
    });

    $('#datatable').DataTable({
        responsive: true
    });
</script>