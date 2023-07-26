<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Habitat</th>
            <th>Deskripsi Ikan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ikan as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['nama_ikan']; ?></td>
                <td><?= $item['habitat']; ?></td>
                <td><?= $item['deskripsi_ikan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>