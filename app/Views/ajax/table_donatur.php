<table id="datatable" class="table table-striped">
    <thead>
        <tr>
            <th width="10%">No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Hp</th>
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
                <td> <?= $row['nohp']; ?></td>
                <td> <?= "Rp. " . number_format($row['jumlah']); ?></td>
                <td style="text-align: center;">
                    <a href="#" class="btn-sm btn-primary btn-update" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>" data-nohp="<?= $row['nohp']; ?>" data-jumlah="<?= $row['jumlah']; ?>"><i class="icofont icofont-ui-edit"></i></a>
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
        const nama = $(this).data('nama');
        const alamat = $(this).data('alamat');
        const nohp = $(this).data('nohp');
        const jumlah = $(this).data('jumlah');
        $('.id').val(id);
        $('.nama').val(nama);
        $('.alamat').val(alamat);
        $('.nohp').val(nohp);
        $('.jumlah').val(jumlah);
        $('#updateModal').modal('show');
    });

    $('#datatable').DataTable({
        responsive: true
    });
</script>