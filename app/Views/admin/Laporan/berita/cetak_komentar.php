<?= $this->include('nav/head_cetak'); ?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Berita</th>
            <th>Comment</th>
            <th>Publish Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berita as $index => $item) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $item['username']; ?></td>
                <td><?= $item['judul']; ?></td>
                <td><?= $item['isi']; ?></td>
                <td><?= $item['dibuat']; ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>

</html>