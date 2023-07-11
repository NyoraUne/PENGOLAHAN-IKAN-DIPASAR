<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show " role="alert">
                <strong>Selamat!</strong> Data berhasil di simpan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('Error')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Perhatian!</strong> Data gagal di simpan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success_hapus')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data berhasil di hapus.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('Error_hapu')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Perhatian!</strong> Data gagal di hapus.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success_edit')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data berhasil di Edit.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('Error_edit')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Perhatian!</strong> Data gagal di Edit.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-4">
                <form action="<?= base_url('Con_pasar/tambah_pasar') ?>" method="post">

                    <!-- Input Data Start -->
                    Nama Pasar
                    <div class="input-group mb-3">
                        <input name="nama_pasar" type="text" class="form-control" placeholder="Pasar Bojong Rebo..">
                    </div>
                    <!-- Input Data End -->
                    <!-- Input Data Start -->
                    Tanggal
                    <div class="input-group mb-3">
                        <input name="tgl" type="date" class="form-control">
                    </div>
                    <!-- Input Data End -->
                    <!-- Input Data Start -->
                    Nama Penjual
                    <div class="input-group mb-3">
                        <input name="nama_penjual" type="text" class="form-control" placeholder="H. Yasin..">
                    </div>
                    <!-- Input Data End -->
                    <div class="float-end">
                        <button class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <table id="tb1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasar</th>
                            <th>Tanggal</th>
                            <th>Nama Penjual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pasar as $pa) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pa['nama_pasar']; ?></td>
                                <td><?= $pa['tanggal']; ?></td>
                                <td><?= $pa['nama_penjual']; ?></td>
                                <td>
                                    <a href="<?= base_url('Con_pasar/edit_pasar/' . $pa['id_pasar']) ?>" class="btn btn-outline-info btn-ssm custom-btn">Edit</a>
                                    <a href="<?= base_url('Con_pasar/hapus_pasar/' . $pa['id_pasar']) ?>" class="btn btn-outline-danger btn-ssm custom-btn" onclick="return confirmAction(event)">Hapus</a>
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
<script>
    function confirmAction(event) {
        var confirmation = confirm("Apakah Anda yakin untuk menghapus data?");

        if (!confirmation) {
            event.preventDefault();
        }

        return confirmation;
    }
</script>