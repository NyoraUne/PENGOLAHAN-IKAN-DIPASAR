<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Berita</th>
            <th>Tanggal Berita Di Buat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berita as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['judul']; ?></td>
                <td><?= $item['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>