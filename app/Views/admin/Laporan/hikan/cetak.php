<?= $this->include('nav/head_cetak'); ?> 
<?php $no = 1; ?>
<?php foreach ($hikan as $index) : ?>
    <table style="margin-bottom: 10px;">
        <thead>
            <tr style="background-color: black; color: #ccc;">
                <th width="200px">Nama Pasar</th>
                <th width="500px">Alamat Pasar</th>
                <th width="200px">Data Di Buat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $index['nama_pasar']; ?></td>
                <td><?= $index['alamat_pasar']; ?></td>
                <td><?= $index['update_at']; ?></td>
            </tr>

            <tr>
                <td style="color: white; background-color: grey;">Update Tanggal</td>
                <td style="color: white; background-color: grey;">Nama Ikan</td>
                <td style="color: white; background-color: grey;">Harga Ikan</td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($harga as $item) : ?>
                <?php if ($item['id_harga_ikan'] === $index['id_harga_ikan']) : ?>
                    <tr>
                        <td><?= $item['created_at']; ?></td>
                        <td><?= $item['nama_ikan']; ?></td>
                        <td>Rp. <?= $item['harga']; ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endforeach; ?>
<hr>
</body>

</html>