<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<style>
    #table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #table td,
    #table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #table tr:hover {
        background-color: #ddd;
    }

    #table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<body>
    <div style="text-align: center;">
        <h1>Laporan Data Siswa</h1>
        <h3>SMK Negeri 1 Cimahi</h3>
        <h4>Jl. Raya Cimahi No. 1, Cimahi, Kabupaten Bandung Barat, Jawa Barat 40512</h4>
    </div>
    <table id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Bulan</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($laporan as $l) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $l['nama_siswa']; ?></td>
                    <td><?= $l['bulan_bayar']; ?></td>
                    <td>
                        <?php $laporan = $l['jmlh_bayar'];
                        $rupiah = "Rp. " . number_format($laporan, 0, ',', '.');
                        echo $rupiah;
                        ?>
                    </td>
                    <td><?= date('d m Y', $l['tgl_bayar']); ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" align="center"><b>Total</b></td>
                <td colspan="1"><b>Rp. <?= $l['jmlh_bayar']; ?></b></td>
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>