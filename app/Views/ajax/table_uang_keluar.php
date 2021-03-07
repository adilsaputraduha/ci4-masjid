<table id="datatable" class="table table-striped">
    <thead>
        <tr>
            <th width="10%">No.</th>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($cashout as $row) : $no++ ?>
            <tr>
                <td> <?= $no; ?></td>
                <td> <?= $row['tanggal']; ?></td>
                <td> <?= $row['nama']; ?></td>
                <td> <?= "Rp. " . number_format($row['jumlah']); ?></td>
                <td> <?= $row['keterangan']; ?></td>
                <td style="text-align: center;">
                    <a href="#" class="btn-sm btn-primary btn-update" data-id="<?= $row['id']; ?>" data-tanggal="<?= $row['tanggal']; ?>" data-jenispengeluaran="<?= $row['idp']; ?>" data-keterangan="<?= $row['keterangan']; ?>" data-jumlah="<?= $row['jumlah']; ?>"><i class="icofont icofont-ui-edit"></i></a>
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
        const jenispengeluaran = $(this).data('jenispengeluaran');
        const ket = $(this).data('keterangan');
        const jumlah = $(this).data('jumlah');
        $('.id').val(id);
        $('.tanggal').val(tanggal);
        $('.jenispengeluaran').val(jenispengeluaran);
        $('.keterangan').val(ket);
        $('.jumlah').val(jumlah);
        $('#updateModal').modal('show');
    });

    $('#datatable').DataTable({
        responsive: true
    });
</script>