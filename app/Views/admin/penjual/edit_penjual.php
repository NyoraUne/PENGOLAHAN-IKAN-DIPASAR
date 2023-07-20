<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_penjual/simpan_edit_penjual/' . $penjual['id_penjual']); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- input data -->
                    Nama Penjual :
                    <div class="input-group mb-3">
                        <select id="select" name="id_user" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($user as $us) : ?>
                                <option value="<?= $us['id_user']; ?>" <?php if ($us['id_user'] == $penjual['id_user']) echo "selected='selected'"; ?>>
                                    <?= $us['id_user']; ?> - <?= $us['nama_user']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- input data -->
                    Nama Toko :
                    <div class="input-group mb-2">
                        <input name="nama_toko" type="text" class="form-control" value="<?= $penjual['nama_toko']; ?>">
                    </div>
                </div>
                <div class="col">
                    <!-- input data -->
                    Nama Pasar :
                    <div class="input-group mb-3">
                        <select id="select1" name="id_pasar" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($pasar as $us) : ?>
                                <option value="<?= $us['id_pasar']; ?>" <?php if ($us['id_pasar'] == $penjual['id_pasar']) echo "selected='selected'"; ?>>
                                    <?= $us['id_pasar']; ?> - <?= $us['nama_pasar']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- input data -->
                    Kontak Toko :
                    <div class="input-group mb-2 ">
                        <input name="kontak_toko" type="text" class="form-control" value="<?= $penjual['kontak_toko']; ?>">
                    </div>
                    <br>
                    <div class="float-end">
                        <button type="submit" class="btn btn-primary ">Simpan Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->include('nav/foot'); ?>