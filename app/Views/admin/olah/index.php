<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_olah/tambah_data'); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- /* ---------------------------- //ANCHOR - Col 1 ---------------------------- */ -->
                    <!-- input data -->
                    Nama Ikan:
                    <div class="input-group mb-3">
                        <select id="select" name="id_ikan" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($ikan as $ikan) : ?>
                                <option value="<?= $ikan['id_ikan']; ?>"><?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- input data -->
                    Tanggal Mulai Pengolahan :
                    <div class="input-group mb-2 ">
                        <input name="tanggal_olah" type="date" class="form-control">
                    </div>

                    <!-- input data -->
                    Jenis Pengolahan :
                    <div class="input-group mb-2 ">
                        <input name="jenis_olah" type="text" placeholder="kalengan.." class="form-control">
                    </div>
                    <!-- /* -------------------------- //ANCHOR - Col 1 End -------------------------- */ -->
                </div>
                <div class="col">
                    <!-- /* ---------------------------- //ANCHOR - Col 2 ---------------------------- */ -->
                    <!-- input data -->
                    Jumblah ikan yang di olah :
                    <div class="input-group mb-2 ">
                        <input name="jumlah_olah" type="number" class="form-control">
                        <span style="width: 70px;" class="input-group-text">Kg</span>
                    </div>

                    <!-- input data -->
                    Lama Pengolahan :
                    <div class="input-group mb-2 ">
                        <input name="durasi_olah" type="number" class="form-control">
                        <span style="width: 70px;" class="input-group-text">Hari</span>
                    </div>

                    <!-- input data -->
                    Catatan :
                    <div class="input-group mb-2 ">
                        <input name="catatan" type="text" class="form-control">
                    </div>

                    <div class="float-end">
                        <button class="btn btn-primary" type="submit">Tambah Data</button>
                    </div>
                    <!-- /* -------------------------- //ANCHOR - Col 2 End -------------------------- */ -->
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
            <th>Tanggal Diolah</th>
            <th>Jenis Olahan</th>
            <th>Jumlah Olahan /Kg</th>
            <th>Lama Pengolahan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($olahan as $olahan) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $olahan['nama_ikan']; ?></td>
                <td><?= $olahan['tanggal_olah']; ?></td>
                <td><?= $olahan['jenis_olah']; ?></td>
                <td><?= $olahan['jumlah_olah']; ?></td>
                <td><?= $olahan['durasi_olah']; ?></td>
                <td>
                    <a href="<?= base_url('Con_olah/detail/' . $olahan['id_pengolahan_ikan']); ?>" class="btn btn-outline-info btn-ssm">Detail Data</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('nav/foot'); ?>