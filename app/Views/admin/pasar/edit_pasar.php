<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_pasar/simpan_edit_pasar/' . $pasar['id_pasar']); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- input data -->

                    Nama Pasar :
                    <div class="input-group mb-2">
                        <input name="nama_pasar" type="text" class="form-control" value="<?= $pasar['nama_pasar']; ?>">
                    </div>
                    <!-- input data -->
                    Alamat :
                    <div class="input-group mb-2">
                        <input name="alamat_pasar" type="text" class="form-control" value="<?= $pasar['alamat_pasar']; ?>">
                    </div>
                </div>
                <div class="col">
                    <!-- input data -->
                    Deskripsi :
                    <div class="input-group mb-2">
                        <input name="deskripsi_pasar" type="text" class="form-control" value="<?= $pasar['deskripsi_pasar']; ?>">
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