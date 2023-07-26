<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Tanggal Pengolahan</th>
            <th>Jenis Pengolahan</th>
            <th>Jumlah Ikan /Kg</th>
            <th>Lama Pengolahan /Hari</th>
            <th>Catatan</th>
            <th>Data Di Buat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kelola as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['nama_ikan']; ?></td>
                <td><?= $item['tanggal_olah']; ?></td>
                <td><?= $item['jenis_olah']; ?></td>
                <td><?= $item['jumlah_olah']; ?></td>
                <td><?= $item['durasi_olah']; ?></td>
                <td><?= $item['catatan']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>