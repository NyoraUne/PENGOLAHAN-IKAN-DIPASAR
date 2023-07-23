            <?= $this->include('nav/head'); ?>
            <main>
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('alert/index'); ?>


                        <div class="row">
                            <div class="col-4">
                                <form action="<?= base_url('Con_ikan/tambah_ikan') ?>" method="post">
                                    <!-- Input Data Start -->
                                    Nama Ikan :
                                    <div class="input-group mb-3">
                                        <input name="nama_ikan" type="text" class="form-control" placeholder="Ikan Sepat.." required>
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    Habitat Ikan :
                                    <div class="input-group mb-3">
                                        <input name="habitat_ikan" type="text" class="form-control" placeholder="Air Tawar.." required>
                                    </div>
                                    <!-- Input Data End -->
                                    <!-- Input Data Start -->
                                    Deskripsi :
                                    <textarea name="deskripsi_ikan" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                                    <!-- Input Data End -->

                                    <div class="float-end mt-3">
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                <table id="tb1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ikan</th>
                                            <th>Habitat Ikan</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($ikan as $i) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $i['nama_ikan']; ?></td>
                                                <td><?= $i['habitat']; ?></td>
                                                <td><?= $i['deskripsi_ikan']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Con_ikan/edit_ikan/' . $i['id_ikan']) ?>" class="btn btn-outline-info btn-ssm custom-btn">Edit</a>
                                                    <a href="<?= base_url('Con_ikan/hapus_ikan/' . $i['id_ikan']) ?>" class="btn btn-outline-danger btn-ssm custom-btn" onclick="return confirmAction(event)">Hapus</a>
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