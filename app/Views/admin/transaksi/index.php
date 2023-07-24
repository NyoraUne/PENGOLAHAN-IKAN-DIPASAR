<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_transaksi/simpan_data'); ?>" method="post">
            <div class="row">
                <div class="col">
                    Nama Ikan :
                    <div class="input-group mb-2">
                        <select id="select" name="id_ikan" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($ikan as $ikan) : ?>
                                <option value="<?= $ikan['id_ikan']; ?>"><?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- input data -->
                    Tanggal Keluar/Masuk :
                    <div class="input-group mb-2 ">
                        <input name="tanggal" type="date" class="form-control">
                    </div>

                    <!-- input data -->
                    Jumlah Keluar/Masuk :
                    <div class="input-group mb-2 ">
                        <input name="jumlah" type="number" class="form-control">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
                <div class="col">
                    <!-- input data -->
                    Keterangan :
                    <div class="input-group mb-2 ">
                        <input name="keterangan" type="text" class="form-control">
                    </div>

                    <!-- input data -->
                    lokasi :
                    <div class="input-group mb-2 ">
                        <input name="lokasi" type="text" class="form-control">
                    </div>
                    <br>
                    <div class="float-end">
                        <button class="btn btn-primary" type="submit">Simpan Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>
<table id="tb1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ikan</th>
            <th>Tanggal</th>
            <th>Jumlah Kg</th>
            <th>Keterangan</th>
            <th>Loksai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($transaksi as $transaksi) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $transaksi['nama_ikan']; ?></td>
                <td><?= $transaksi['tanggal']; ?></td>
                <td><?= $transaksi['jumlah']; ?></td>
                <td><?= $transaksi['keterangan']; ?></td>
                <td><?= $transaksi['lokasi']; ?></td>
                <td>
                    <a onclick="return confirmAction(event)" class="btn btn-outline-danger btn-ssm" href="<?= base_url('Con_transaksi/hapus_data/' . $transaksi['id_transaksi_ikan']); ?>">Hapus Data</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('nav/foot'); ?>