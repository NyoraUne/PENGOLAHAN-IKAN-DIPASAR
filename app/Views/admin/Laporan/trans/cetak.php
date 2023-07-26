<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Tanggal Transaksi </th>
            <th>Jumlah /Kg</th>
            <th>keterangan Keluar/Masuk</th>
            <th>Lokasi</th>
            <th>Data Di Buat Pada</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($trans as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['nama_ikan']; ?></td>
                <td><?= $item['tanggal']; ?></td>
                <td><?= $item['jumlah']; ?></td>
                <td><?= $item['keterangan']; ?></td>
                <td><?= $item['lokasi']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>