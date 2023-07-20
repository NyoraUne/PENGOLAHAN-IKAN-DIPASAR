<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <?= $this->include('alert/index'); ?>


        <div class="row">
            <div class="col-4">
                <form action="<?= base_url('Con_penjual/tambah_penjual') ?>" method="post">

                    Nama Penjual :
                    <div class="input-group mb-3">
                        <select id="select" name="id_user" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($user as $us) : ?>
                                <option value="<?= $us['id_user']; ?>"><?= $us['id_user']; ?> - <?= $us['nama_user']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    Nama Pasar :
                    <div class="input-group mb-3">
                        <select id="select1" name="id_pasar" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($pasar as $pa) : ?>
                                <option value="<?= $pa['id_pasar']; ?>"><?= $pa['id_pasar']; ?> - <?= $pa['nama_pasar']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Input Data Start -->
                    Nama Toko :
                    <div class="input-group mb-3">
                        <input name="nama_toko" type="text" class="form-control" placeholder="Pasar Bojong Rebo..">
                    </div>
                    <!-- Input Data Start -->
                    Kontak Toko :
                    <div class="input-group mb-3">
                        <input name="kontak_toko" type="text" class="form-control">
                    </div>

                    <div class="float-end">
                        <button class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <table id="tb1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Toko</th>
                            <th>Nama Pemilik</th>
                            <th>Kontak Toko</th>
                            <th>Pasar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($penjual as $pa) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pa['nama_toko']; ?></td>
                                <td><?= $pa['nama_user']; ?></td>
                                <td><?= $pa['kontak_toko']; ?></td>
                                <td><?= $pa['nama_pasar']; ?></td>
                                <td>
                                    <a href="<?= base_url('Con_penjual/edit_penjual/' . $pa['id_penjual']) ?>" class="btn btn-outline-info btn-ssm custom-btn">Edit</a>
                                    <a href="<?= base_url('Con_penjual/hapus_penjual/' . $pa['id_penjual']) ?>" class="btn btn-outline-danger btn-ssm custom-btn" onclick="return confirmAction(event)">Hapus</a>
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
<script>
    function confirmAction(event) {
        var confirmation = confirm("Apakah Anda yakin untuk menghapus data?");

        if (!confirmation) {
            event.preventDefault();
        }

        return confirmation;
    }
</script>
