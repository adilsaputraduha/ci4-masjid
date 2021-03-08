<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Donatur</title>

    <style>
        table {
            font-family: sans-serif;
            color: #444;
            width: 100%;
            /* border: 1px solid #f2f5f7; */
        }

        table tr th {
            background: #f5f5f5;
        }

        table,
        th,
        td {
            text-align: center;
        }

        .no {
            width: 20%;
        }

        h4 {
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>

</body>
<div style="text-align: center; font-family: sans-serif, Cochin, Georgia, Times, 'Times New Roman', serif; ">
    <h3 style="margin-bottom: -0.5rem;">Masjid Al-Hikmah</h3>
    <h4>Komp. Perumahan Parupuk Raya Blok H.6</h4>
    <hr>
    <h4>Laporan Data Donatur</h4>
</div>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Jumlah</th>
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
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    window.print();
</script>

</html>