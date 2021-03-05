<table id="datatable" class="table table-striped">
    <thead>
        <tr>
            <th width="10%">No.</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($jenispengeluaran as $row) : $no++ ?>
        <tr>
            <td> <?= $no; ?></td>
            <td> <?= $row['nama']; ?></td>
            <td style="text-align: center;">
                <a href="#" class="btn-sm btn-primary btn-update" data-id="<?= $row['idp']; ?>" data-nama="<?= $row['nama']; ?>"><i class="icofont icofont-ui-edit"></i></a>
                <a href="#" class="btn-sm btn-danger btn-delete" data-id="<?= $row['idp']; ?>"><i class="icofont icofont-ui-delete"></i></a>
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
        $('.id').val(id);
        $('.nama').val(nama);
        $('#updateModal').modal('show');
    });
    
    $('#datatable').DataTable({
        responsive: true
    });
</script>