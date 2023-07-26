<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Tempat / Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Bergabung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($user as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['nik_user']; ?></td>
                <td><?= $item['nama_user']; ?></td>
                <td><?= $item['lahir_user']; ?> <?= $item['tgllahir_user']; ?></td>
                <td><?= $item['jekel_user']; ?></td>
                <td><?= $item['alamat_user']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>