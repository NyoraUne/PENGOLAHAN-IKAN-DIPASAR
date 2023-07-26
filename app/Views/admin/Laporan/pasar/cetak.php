<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasar</th>
            <th>Alamat Pasar</th>
            <th>Deskripsi Pasar</th>
            <th>Data Di Buat Pada</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pasar as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['nama_pasar']; ?></td>
                <td><?= $item['alamat_pasar']; ?></td>
                <td><?= $item['deskripsi_pasar']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>