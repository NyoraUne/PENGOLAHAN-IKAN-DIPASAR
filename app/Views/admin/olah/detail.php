<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                Data Ikan
                <hr>
                <div class="mb-1">
                    <b>Nama Ikan : <br></b>
                    <?= $olahan['nama_ikan']; ?>
                </div>
                <div class="mb-1">
                    <b>Habitat Ikan : <br></b>
                    <?= $olahan['habitat']; ?>
                </div>
                <div class="mb-1">
                    <b>Deskripsi Ikan : <br></b>
                    <?= $olahan['deskripsi_ikan']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('Con_olah/simpan_edit/' . $olahan['id_pengolahan_ikan']); ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- input data -->
                            Tanggal Mulai Pengolahan :
                            <input name="id_ikan" type="text" class="form-control" value="<?= $olahan['id_ikan']; ?>" hidden>
                            <div class="input-group mb-2 ">
                                <input name="tanggal_olah" type="date" class="form-control" value="<?= $olahan['tanggal_olah']; ?>" required>
                            </div>

                            <!-- input data -->
                            Jenis Pengolahan :
                            <div class="input-group mb-2 ">
                                <input name="jenis_olah" type="text" placeholder="kalengan.." class="form-control" value="<?= $olahan['jenis_olah']; ?>" required>
                            </div>

                            <!-- input data -->
                            Jumblah ikan yang di olah :
                            <div class="input-group mb-2 ">
                                <input name="jumlah_olah" type="number" class="form-control" value="<?= $olahan['jumlah_olah']; ?>" required>
                                <span style="width: 70px;" class="input-group-text">Kg</span>
                            </div>

                        </div>
                        <div class="col">

                            <!-- input data -->
                            Lama Pengolahan :
                            <div class="input-group mb-2 ">
                                <input name="durasi_olah" type="number" class="form-control" value="<?= $olahan['durasi_olah']; ?>" required>
                                <span style="width: 70px;" class="input-group-text">Hari</span>
                            </div>

                            <!-- input data -->
                            Catatan :
                            <div class="input-group mb-2 ">
                                <input name="catatan" type="text" class="form-control" value="<?= $olahan['catatan']; ?>" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <button class="btn btn-primary" type="submit">Simpan Data</button>
                                <a href="<?= base_url('Con_olah/hapus_data/' . $olahan['id_pengolahan_ikan']); ?>" class="btn btn-warning" type="submit">Kembali</a>
                                <a href="<?= base_url('Con_olah/hapus_data/' . $olahan['id_pengolahan_ikan']); ?>" class="btn btn-danger" type="submit">Hapus Data</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>