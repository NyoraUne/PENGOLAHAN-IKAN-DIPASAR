<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Pembenihan</th>
            <th>Nama Ikan</th>
            <th>lokasi </th>
            <th>metode</th>
            <th>Jumlah Betina /Kg</th>
            <th>Jumlah Jantan /Kg</th>
            <th>Jumlah Telur /Kg</th>
            <th>Status</th>
            <th>keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($benih as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['tgl_benih']; ?></td>
                <td><?= $item['nama_ikan']; ?></td>
                <td><?= $item['lokasi_benih']; ?></td>
                <td><?= $item['metode']; ?></td>
                <td><?= $item['jumlah_betina']; ?></td>
                <td><?= $item['jumlah_jantan']; ?></td>
                <td><?= $item['jumlah_telur']; ?></td>
                <td><?= $item['status_benih']; ?></td>
                <td><?= $item['keterangan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>