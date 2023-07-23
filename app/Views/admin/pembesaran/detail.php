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
                    <?= $pembesaran['nama_ikan']; ?>
                </div>
                <div class="mb-1">
                    <b>Habitat Ikan : <br></b>
                    <?= $pembesaran['habitat']; ?>
                </div>
                <div class="mb-1">
                    <b>Deskripsi Ikan : <br></b>
                    <?= $pembesaran['deskripsi_ikan']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                Data Pembesaran Ikan
                <hr>
                <form action="<?= base_url('Con_pembesaran/simpan_edit/' . $pembesaran['id_pembesaran']); ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <!-- Input for "tgl_mulai" -->
                            <div class="mb-2">
                                Tanggal Mulai :
                                <input id="tgl_mulai" name="tgl_mulai" type="date" class="form-control" value="<?= $pembesaran['tgl_mulai']; ?>" required>
                            </div>

                            <!-- input data -->
                            <input name="id_ikan" type="text" class="form-control" value="<?= $pembesaran['id_ikan']; ?>" hidden>

                            <!-- Input for "tgl_selesai" -->
                            <div class="mb-2">
                                Tanggal Selesai :
                                <input id="tgl_selesai" name="tgl_selesai" type="date" class="form-control" value="<?= $pembesaran['tgl_selesai']; ?>" required>
                            </div>

                            <!-- Input for "suhu_air" -->
                            Suhu Air :
                            <div class="input-group mb-2">
                                <input id="suhu_air" name="suhu_air" type="number" class="form-control" value="<?= $pembesaran['suhu_air']; ?>" required>
                                <span class="input-group-text">°C</span>
                            </div>

                            <!-- Input for "kondisi_kesehatan" -->
                            <div class="mb-2">
                                Kondisi Kesehatan Ikan :
                                <input id="kondisi_kesehatan" name="kondisi_kesehatan" type="text" class="form-control" value="<?= $pembesaran['kondisi_kesehatan']; ?>" required>
                            </div>
                        </div>
                        <div class="col">


                            <!-- Input for "lokasi" -->
                            <div class="mb-2">
                                Lokasi :
                                <input id="lokasi" name="lokasi" type="text" class="form-control" value="<?= $pembesaran['lokasi']; ?>" required>
                            </div>

                            <!-- Input for "jumlah_pakan" -->
                            Jumlah Pakan :
                            <div class="input-group mb-2">
                                <input id="jumlah_pakan" name="jumlah_pakan" type="number" class="form-control" value="<?= $pembesaran['jumlah_pakan']; ?>" required>
                                <span class="input-group-text">Kg</span>
                            </div>

                            <!-- Input for "keterangan" -->
                            <div class="mb-2">
                                Keterangan :
                                <input id="keterangan" name="keterangan" type="text" class="form-control" value="<?= $pembesaran['keterangan']; ?>" required>
                            </div>

                            <div class="float-end">
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <a href="<?= base_url('Con_pembesaran/hapus_data/' . $pembesaran['id_pembesaran']); ?>" class="btn btn-danger">Hapus Data</a>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->include('nav/foot'); ?>