<?= $this->include('nav/h_user'); ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <form action="<?= base_url('Con_hargaikan/simpan_edit/' . $harga['id_harga_ikan']); ?>" method="post">

                    <!-- input data -->
                    Nama Pasar :
                    <input name="id_pasar" type="text" class="form-control" value="<?= $harga['id_pasar']; ?>" hidden>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="<?= $harga['nama_pasar']; ?>" disabled>
                    </div>
                    Alamat
                    <div class="mb-2">
                        <textarea name="map" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?= $harga['alamat_pasar']; ?></textarea>
                    </div>
                    <div class="map mb-2">
                        <?= $harga['map']; ?>
                    </div>
                </form>
            </div>
            <div class="col">
                <h4>
                    Data Di Update Per hari Ini

                </h4>
                <hr>
                <table class="table" id="tb1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ikan</th>
                            <th>Banyak Kg</th>
                            <th>Harga</th>
                            <th>Tanggal Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($detailharga as $detailharga) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $detailharga['nama_ikan']; ?></td>
                                <td><?= $detailharga['banyak']; ?></td>
                                <td><?= $detailharga['harga']; ?></td>
                                <td><?= $detailharga['created_at']; ?></td>

                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?= $this->include('nav/f_user'); ?>