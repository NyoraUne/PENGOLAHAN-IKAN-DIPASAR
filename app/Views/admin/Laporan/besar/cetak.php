<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai </th>
            <th>Lokasi</th>
            <th>Suhu Air</th>
            <th>Jumlah Pakan /Kg</th>
            <th>Kondisi Kesehatan</th>
            <th>keterangan</th>
            <th>Di Data Pada</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($besar as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['nama_ikan']; ?></td>
                <td><?= $item['tgl_mulai']; ?></td>
                <td><?= $item['tgl_selesai']; ?></td>
                <td><?= $item['lokasi']; ?></td>
                <td><?= $item['suhu_air']; ?></td>
                <td><?= $item['jumlah_pakan']; ?></td>
                <td><?= $item['kondisi_kesehatan']; ?></td>
                <td><?= $item['keterangan']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>