<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Perairan</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Jenis Kapal</th>
            <th>Alat Tangkap</th>
            <th>Nama Nelayan</th>
            <th>Jumlah Tangkap /Kg</th>
            <th>Keterangan</th>
            <th>Waktu Input</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tangkap as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['jenis_perairan']; ?></td>
                <td><?= $item['lokasi']; ?></td>
                <td><?= $item['tanggal']; ?></td>
                <td><?= $item['jenis_kapal']; ?></td>
                <td><?= $item['alat_tangkap']; ?></td>
                <td><?= $item['nama_user']; ?></td>
                <td><?= $item['jumlah_tangkap']; ?></td>
                <td><?= $item['keterangan']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>