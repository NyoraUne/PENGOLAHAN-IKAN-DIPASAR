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
    <?php $no = 1; ?>
    <?php foreach ($hikan as $index) : ?>
        <table style="margin-bottom: 10px;">
            <thead>
                <tr style="background-color: black; color: #ccc;">
                    <th width="200px">Nama Pasar</th>
                    <th width="500px">Alamat Pasar</th>
                    <th width="200px">Data Di Buat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $index['nama_pasar']; ?></td>
                    <td><?= $index['alamat_pasar']; ?></td>
                    <td><?= $index['update_at']; ?></td>
                </tr>

                <tr>
                    <td style="color: white; background-color: grey;">Update Tanggal</td>
                    <td style="color: white; background-color: grey;">Nama Ikan</td>
                    <td style="color: white; background-color: grey;">Harga Ikan</td>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($harga as $item) : ?>
                    <?php if ($item['id_harga_ikan'] === $index['id_harga_ikan']) : ?>
                        <tr>
                            <td><?= $item['created_at']; ?></td>
                            <td><?= $item['nama_ikan']; ?></td>
                            <td>Rp. <?= $item['harga']; ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
    <hr>
</body>

</html>