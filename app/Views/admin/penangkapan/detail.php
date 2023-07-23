<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <?= $this->include('alert/index'); ?>
        <div class="row">
            <div class="col-5">
                <h5>Detail Nelayan</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <b>
                            Nama Nelayan <br>
                            Jenis Peraian <br>
                            Tanggal <br>
                            Jenis Kapal <br>
                            Alat Tangkap <br>
                            Lokasi <br>
                            Jumlah Tangkapan <br>
                            Keterangan <br>
                        </b>
                    </div>
                    <div class="col">
                        : <?= $penangkapan['nama_user']; ?> <br>
                        : <?= $penangkapan['jenis_perairan']; ?> <br>
                        : <?= $penangkapan['tanggal']; ?> <br>
                        : <?= $penangkapan['jenis_kapal']; ?> <br>
                        : <?= $penangkapan['alat_tangkap']; ?> <br>
                        : <?= $penangkapan['lokasi']; ?> <br>
                        : <?= $penangkapan['jumlah_tangkap']; ?> .Kg<br>
                        : <?= $penangkapan['keterangan']; ?> <br>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5>Data kemungkinan ikan yang di tangkap</h5>
                <hr>
                <form action="<?= base_url('Con_penangkapan/add_ikan/' . $penangkapan['id_perikanan_tangkap']); ?>" method="post">

                    Pilih Ikan :
                    <div class="input-group mb-3">
                        <select id="select" name="id_ikan" class="form-select" required>
                            <option value=""></option>
                            <?php foreach ($ikan as $ikan) : ?>
                                <option value="<?= $ikan['id_ikan']; ?>"><?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?> - <?= $ikan['habitat']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn btn-outline-dark">Tambah Data</button>
                    </div>
                </form>
                <table id="polos">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ikan</th>
                            <th>Habitat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($datail as $datail) : ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $datail['nama_ikan']; ?></td>
                                <td><?= $datail['habitat']; ?></td>
                                <td>
                                    <a href="<?= base_url('Con_penangkapan/hapus_ikan/' . $datail['id_detail_tangkap']); ?>" class="btn btn-outline-danger btn-ssm">Hapus</a>
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