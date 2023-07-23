<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_ikan/simpan_edit_ikan/' . $ikan['id_ikan']); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- input data -->

                    Nama Ikan:
                    <div class="input-group mb-2">
                        <input name="nama_ikan" type="text" class="form-control" value="<?= $ikan['nama_ikan']; ?>">
                    </div>
                    <!-- input data -->
                    Habitat Ikan:
                    <div class="input-group mb-2">
                        <input name="habitat" type="text" class="form-control" value="<?= $ikan['habitat']; ?>">
                    </div>
                </div>
                <div class="col">
                    <!-- input data -->
                    Deskripsi Ikan :
                    <div class="input-group mb-2">
                        <textarea name="deskripsi_ikan" class="form-control" id="floatingTextarea" required><?= $ikan['deskripsi_ikan']; ?></textarea>
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