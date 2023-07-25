<?= $this->include('nav/head'); ?>
<style>
    .map {
        width: 100%;
        height: 200px;
    }
</style>
<?= $this->include('alert/index'); ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <form action="<?= base_url('Con_hargaikan/simpan_edit/' . $harga['id_harga_ikan']); ?>" method="post">

                    <!-- input data -->
                    Nama Pasar :
                    <input name="id_pasar" type="text" class="form-control" value="<?= $harga['id_pasar']; ?>" hidden>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="<?= $harga['nama_pasar']; ?>" disabled>
                    </div>
                    <div class="map mb-2">
                        <?= $harga['map']; ?>
                    </div>
                    Map Edit
                    <div class="mb-2">
                        <textarea name="map" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $harga['map']; ?></textarea>
                    </div>
                    <div class="float-end">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <form action="<?= base_url('Con_hargaikan/simpan_ikan/' . $harga['id_harga_ikan']); ?>" method="post">
                    <div class="row">
                        <div class="col">
                            Nama :
                            <div class="input-group mb-2">
                                <select id="select" name="id_ikan" class="form-select" required>
                                    <option value=""></option>
                                    <?php foreach ($ikan as $ikan) : ?>
                                        <option value="<?= $ikan['id_ikan']; ?>"><?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- input data -->
                            Banyak :
                            <div class="input-group mb-2">
                                <input name="banyak" type="number" class="form-control">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                        <div class="col">
                            <!-- input data -->
                            Harga /Kg :
                            <div class="input-group mb-2">
                                <span class="input-group-text">Rp.</span>
                                <input name="harga" type="number" class="form-control">
                            </div><br>
                            <div class="float-end">
                                <a href="<?= base_url('Con_hargaikan/index'); ?>" class="btn btn-warning">Kembali</a>
                                <button class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <table id="tb1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ikan</th>
                            <th>Banyak Kg</th>
                            <th>Harga</th>
                            <th>Tanggal Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($detailharga as $detailharga) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $detailharga['nama_ikan']; ?></td>
                                <td><?= $detailharga['banyak']; ?></td>
                                <td><?= $detailharga['harga']; ?></td>
                                <td><?= $detailharga['created_at']; ?></td>
                                <td>
                                    <a href="<?= base_url('Con_hargaikan/hapus_ikan/' . $detailharga['id_detail_harga']); ?>" class="btn btn-outline-danger btn-ssm" onclick="return confirmAction(event)">Hapus</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>