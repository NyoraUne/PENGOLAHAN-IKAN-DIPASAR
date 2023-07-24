<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        b {
            margin-top: -1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div style="text-align: center;">
        <h1 style="margin-bottom: -1px;">Dinas Peternakan Dan Perikanan Kab. Tapin</h1>
        <b> Jalan Jend. Sudirman KM. 2,5, Rantau Kiwa, Tapin Utara, Rantau Kiwa,<br> Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71114</b>
    </div>
    <hr>
    <h3><?= $title; ?></h3>
    <?= $msg; ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Toko</th>
                <th>Nama Pemilik</th>
                <th>Kontak Toko</th>
                <th>Pasar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penjual as $index => $item) : ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $item['nama_toko']; ?></td>
                    <td><?= $item['nama_user']; ?></td>
                    <td><?= $item['kontak_toko']; ?></td>
                    <td><?= $item['nama_pasar']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>