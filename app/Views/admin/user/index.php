<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>

<div class="card">
    <div class="card-body">
        <form action="<?= base_url('Con_user/tambah_user'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <!-- //ANCHOR - Ini Col Bagian Pertama -->
                <div class="col">
                    <!-- input data -->
                    Nik :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="nik_user" type="text" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- input data -->
                            Tempat Lahir :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="lahir_user" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <!-- input data -->
                            Tanggal Lahir :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="tgllahir_user" type="date" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <!-- input data -->
                    Alamat :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="alamat_user" type="text" class="form-control" required>
                    </div>

                    <!-- input data -->
                    Kecamatan :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="kecamatan_user" type="text" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- input data -->
                            RT :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="rt_user" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <!-- input data -->
                            RW :
                            <div class="input-group mb-2 input-group-sm">
                                <input name="rw_user" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <!-- input data -->
                    Status perikanan :
                    <div class="input-group mb-2 input-group-sm">
                        <select name="kawin_user" class="form-select" required>
                            <option selected>Pilih status pernikahan</option>
                            <option value="belum_menikah">Belum Menikah</option>
                            <option value="menikah">Menikah</option>
                            <option value="cerai">Cerai</option>
                        </select>

                    </div>

                    <!-- input data -->
                    KTP :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="ktp_user" type="file" class="form-control" required>
                    </div>
                </div>
                <!-- //ANCHOR - Ini Col Bagian Kedua -->
                <div class="col">
                    <!-- input data -->
                    Nama :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="nama_user" type="text" class="form-control" required>
                    </div>

                    <!-- input data -->
                    Jenis Kelamin :
                    <div class="input-group mb-2 input-group-sm">
                        <select name="jekel_user" class="form-select" required>
                            <option value="" selected>Open this select menu</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <!-- input data -->
                    Desa :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="desa_user" type="text" class="form-control" required>
                    </div>

                    <!-- input data -->
                    Kabupaten :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="kabupaten_user" type="text" class="form-control" required>
                    </div>

                    <!-- input data -->
                    Agama :
                    <div class="input-group mb-2 input-group-sm">
                        <select name="agama_user" class="form-select" required>
                            <option selected>Open this select menu</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Kepercayaan Tradisional">Kepercayaan Tradisional</option>
                        </select>

                    </div>

                    <!-- input data -->
                    pekerjaan :
                    <div class="input-group mb-2 input-group-sm">
                        <input name="pekerjaan_user" type="text" class="form-control" required>
                    </div>

                    <br>
                    <div class="float-end">

                        <button class="btn btn-primary btn-sm">Reset</button>
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<hr>
<div class="mt-3">

    <table id="tb1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($user as $us) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $us['nik_user']; ?></td>
                    <td><?= $us['nama_user']; ?></td>
                    <td><?= $us['jekel_user']; ?></td>
                    <td><?= $us['agama_user']; ?></td>
                    <td>
                        <a href="<?= base_url('Con_user/detail_user/' . $us['id_user']); ?>" class="btn btn-ssm btn-outline-info">Details Informasi</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->include('nav/foot'); ?>