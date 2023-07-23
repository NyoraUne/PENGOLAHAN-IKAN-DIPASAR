<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <?= $this->include('alert/index'); ?>

        <form action="<?= base_url('Con_penangkapan/simpan_data'); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- Input for "id_ikan" -->
                    Nama Nelayan :
                    <div class="input-group mb-2">
                        <select id="select" name="id_user" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($user as $user) : ?>
                                <option value="<?= $user['id_user']; ?>"><?= $user['id_user']; ?> - <?= $user['nama_user']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Input for "jenis_perairan" -->
                    <div class="mb-2">
                        Jenis Peraian :
                        <input id="jenis_perairan" name="jenis_perairan" type="text" class="form-control">
                    </div>

                    <!-- Input for "tanggal" -->
                    Tanggal :
                    <div class="input-group mb-2">
                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                    </div>

                    <!-- Input for "jenis_kapal" -->
                    <div class="mb-2">
                        Jenis Kapal :
                        <input id="jenis_kapal" name="jenis_kapal" type="text" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <!-- Input for "alat_tangkap" -->
                    <div class="mb-2">
                        Alat Tangkap :
                        <input id="alat_tangkap" name="alat_tangkap" type="text" class="form-control">
                    </div>

                    <!-- Input for "lokasi" -->
                    <div class="mb-2">
                        Lokasi :
                        <input id="lokasi" name="lokasi" type="text" class="form-control">
                    </div>

                    <!-- Input for "jumlah_tangkap" -->
                    Jumlah Tangkapan :
                    <div class="input-group mb-2">
                        <input id="jumlah_tangkap" name="jumlah_tangkap" type="number" class="form-control">
                        <span class="input-group-text">Kg</span>
                    </div>

                    <!-- Input for "keterangan" -->
                    <div class="mb-2">
                        Keterangan :
                        <input id="keterangan" name="keterangan" type="text" class="form-control">
                    </div>

                    <div class="float-end">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>

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
            <th>Nama Pelayan</th>
            <th>Jenis Peraian</th>
            <th>Tanggal</th>
            <th>Jenis Kapal</th>
            <th>Alat Tangkap</th>
            <th>Jumlah Tangkap /KG</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($penangkapan as $pb) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pb['nama_user']; ?></td>
                <td><?= $pb['jenis_perairan']; ?></td>
                <td><?= $pb['tanggal']; ?></td>
                <td><?= $pb['alat_tangkap']; ?></td>
                <td><?= $pb['jenis_kapal']; ?></td>
                <td><?= $pb['jumlah_tangkap']; ?></td>
                <td>
                    <a href="<?= base_url('Con_penangkapan/detail/' . $pb['id_perikanan_tangkap']); ?>" class="btn btn-outline-info btn-ssm">Detail Data</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('nav/foot'); ?>