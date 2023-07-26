<?= $this->include('nav/head_cetak'); ?>
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