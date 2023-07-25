<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">

        <?= $this->include('alert/index'); ?>


        <form action="<?= base_url('Con_hargaikan/tambah_harga'); ?>" method="post">
            <div class="row">
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
                </div>
                <div class="col">

                    <!-- input data -->
                    Embeded Map :
                    <div class="mb-3">
                        <textarea name="map" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
<hr>
<table id="tb1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasar</th>
            <th>Data Di Buat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($harga as $harga) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $harga['nama_pasar']; ?> </td>
                <td><?= $harga['created_at']; ?> </td>
                <td>
                    <a href="<?= base_url('Con_hargaikan/edit_harga/' . $harga['id_harga_ikan']); ?>" class="btn btn-outline-info btn-ssm">Edit Data</a>
                    <a href="<?= base_url('Con_hargaikan/hapus_harga/' . $harga['id_harga_ikan']); ?>" class="btn btn-outline-danger btn-ssm" onclick="return confirmAction(event)">Hapus Data</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
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