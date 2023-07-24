<?= $this->include('nav/head'); ?>
ini edit harga ikan dengan id: <?= $harga['id_harga_ikan']; ?>

<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_hargaikan/simpan_edit/' . $harga['id_harga_ikan']); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- input data -->
                    Nama Ikan :
                    <div class="input-group mb-2">
                        <input name="id_ikan" value="<?= $harga['id_ikan']; ?>" type="text" class="form-control" hidden>
                        <input value="<?= $harga['nama_ikan']; ?>" type="text" class="form-control" disabled>
                    </div>
                    <!-- input data -->
                    Harga Ikan :
                    <div class="input-group mb-2">
                        <span class="input-group-text">Rp.</span>
                        <input name="harga" type="text" class="form-control" value="<?= $harga['harga'];; ?>" required>
                        <span class="input-group-text">/ Kg</span>
                    </div>
                </div>
                <div class="col">
                    <!-- input data -->
                    Nama Pasar :
                    <div class="input-group mb-2">
                        <input name="id_pasar" type="text" class="form-control" value="<?= $harga['id_pasar']; ?>" hidden>
                        <input type="text" class="form-control" value="<?= $harga['nama_pasar']; ?>" disabled>
                    </div>
                    <!-- input data -->
                    Volume Ikan :
                    <div class="input-group mb-2">
                        <input name="volume" type="number" class="form-control" value="<?= $harga['volume']; ?>" required>
                        <span class="input-group-text">Kg</span>
                    </div>
                    <div class="float-end">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->include('nav/foot'); ?>