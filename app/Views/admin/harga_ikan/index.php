<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">

        <?= $this->include('alert/index'); ?>


        <form action="<?= base_url('Con_hargaikan/tambah_harga'); ?>" method="post">
            <div class="row">
                <div class="col">
                    <!-- input data -->
                    Pilih Ikan :
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fa-solid fa-fish"></i></span>
                        <select id="ikan" name="id_ikan" class="form-select" required>
                            <option value="" selected></option>
                            <?php foreach ($ikan as $ikan) : ?>
                                <option value="<?= $ikan['id_ikan']; ?>">ID.<?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?> - <?= $ikan['habitat']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- input data -->
                    Harga Ikan / Kilo :
                    <div class="input-group mb-2">
                        <span class="input-group-text">Rp.</span>
                        <input name="harga" type="text" class="form-control" required>
                        <span class="input-group-text">/ Kg</span>
                    </div>
                </div>
                <div class="col">
                    <!-- input data -->
                    Pilih Pasar :
                    <div class="input-group mb-2">
                        <span class="input-group-text"><i class="fa-solid fa-shop"></i></span>

                        <select id="pasar" name="id_pasar" class="form-select" required>
                            <option value="" selected></option>
                            <?php foreach ($pasar as $pasar) : ?>
                                <option value="<?= $pasar['id_pasar']; ?>">ID.<?= $pasar['id_pasar']; ?> - <?= $pasar['nama_pasar']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- input data -->
                    Volume Ikan :
                    <div class="input-group mb-2">
                        <input name="volume" type="number" class="form-control" required>
                        <span class="input-group-text">Kg</span>
                    </div>
                    <div class="float-end">
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- table -->
<div class="card mt-3">
    <div class="card-body">
        <table id="tb1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ikan</th>
                    <th>Pasar / Pemilik Toko</th>
                    <th>Harga Per Kg</th>
                    <th>Total Volume</th>
                    <th>Terakhir Update</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($harga as $harga) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $harga['nama_ikan']; ?></td>
                        <td><?= $harga['nama_pasar']; ?> </td>
                        <td><?= $harga['harga']; ?></td>
                        <td><?= $harga['volume']; ?></td>
                        <?php
                        $updateAt = $harga['update_at'];
                        $bulanLalu = strtotime('-1 month'); // Waktu satu bulan yang lalu
                        $color = '';

                        if (strtotime($updateAt) < $bulanLalu) {
                            // Jika lebih dari satu bulan yang lalu, berwarna merah
                            $color = 'btn-outline-warning';
                        } else {
                            // Jika belum satu bulan, berwarna hijau
                            $color = 'btn-outline-info';
                        }
                        ?>

                        <td><?= $harga['update_at']; ?> </td>
                        <td>
                            <a href="<?= base_url('Con_hargaikan/edit_harga/' . $harga['id_harga_ikan']); ?>" class="btn <?= $color; ?> btn-ssm">Edit Data</a>
                            <a href="<?= base_url('Con_hargaikan/hapus_harga/' . $harga['id_harga_ikan']); ?>" class="btn btn-outline-danger btn-ssm" onclick="return confirmAction(event)">Hapus Data</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->include('nav/foot'); ?>

<script>
    jQuery(document).ready(function($) {
        $('#ikan').select2({
            theme: 'bootstrap-5',
            placeholder: "pilih Ikan"
        });
        $('#pasar').select2({
            theme: 'bootstrap-5',
            placeholder: "pilih Pasar"
        });

    });

    function confirmAction(event) {
        var confirmation = confirm("Apakah Anda yakin untuk menghapus data?");

        if (!confirmation) {
            event.preventDefault();
        }

        return confirmation;
    }
</script>