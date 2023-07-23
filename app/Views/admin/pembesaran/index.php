<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <?= $this->include('alert/index'); ?>

        <form action="<?= base_url('Con_pembesaran/simpan_data'); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- Input for "id_ikan" -->
                    Nama Ikan :
                    <div class="input-group mb-2">
                        <select id="select" name="id_ikan" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($ikan as $ikan) : ?>
                                <option value="<?= $ikan['id_ikan']; ?>"><?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Input for "tgl_selesai" -->
                    <div class="mb-2">
                        Tanggal Selesai :
                        <input id="tgl_selesai" name="tgl_selesai" type="date" class="form-control">
                    </div>

                    <!-- Input for "suhu_air" -->
                    Suhu Air :
                    <div class="input-group mb-2">
                        <input id="suhu_air" name="suhu_air" type="number" class="form-control">
                        <span class="input-group-text">°C</span>
                    </div>

                    <!-- Input for "kondisi_kesehatan" -->
                    <div class="mb-2">
                        Kondisi Kesehatan Ikan :
                        <input id="kondisi_kesehatan" name="kondisi_kesehatan" type="text" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <!-- Input for "tgl_mulai" -->
                    <div class="mb-2">
                        Tanggal Mulai :
                        <input id="tgl_mulai" name="tgl_mulai" type="date" class="form-control">
                    </div>

                    <!-- Input for "lokasi" -->
                    <div class="mb-2">
                        Lokasi :
                        <input id="lokasi" name="lokasi" type="text" class="form-control">
                    </div>

                    <!-- Input for "jumlah_pakan" -->
                    Jumlah Pakan :
                    <div class="input-group mb-2">
                        <input id="jumlah_pakan" name="jumlah_pakan" type="number" class="form-control">
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
            <th>Nama Ikan</th>
            <th>Tgl Mulai</th>
            <th>Tgl Selesai</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($pembesaran as $pb) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pb['nama_ikan']; ?></td>
                <td><?= $pb['tgl_mulai']; ?></td>
                <td><?= $pb['tgl_selesai']; ?></td>
                <td><?= $pb['lokasi']; ?></td>
                <td>
                    <a href="<?= base_url('Con_pembesaran/detail/' . $pb['id_pembesaran']); ?>" class="btn btn-outline-info btn-ssm">Detail Data</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('nav/foot'); ?>