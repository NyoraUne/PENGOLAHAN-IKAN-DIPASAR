<?= $this->include('nav/h_user'); ?>
<h4>Pencarian Harga Ikan Di Pasar</h4>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <form action="<?= base_url('User_pasar/cari'); ?>" method="post">

                    Nama :
                    <div class="input-group mb-3">
                        <select id="select" name="id_pasar" class="form-select" required>
                            <?php foreach ($pasar as $pasar) : ?>
                                <option value="<?= $pasar['id_pasar']; ?>"><?= $pasar['id_pasar']; ?> - <?= $pasar['nama_pasar']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="float-end">
                        <button class="btn btn-primary">Cari Data</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <?php foreach ($pasar1 as $pasar1) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h4>
                                <?= $pasar1['nama_pasar']; ?>
                            </h4>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal Di Pherbarui</th>
                                        <th scope="col">Nama Ikan</th>
                                        <th scope="col">Harga Ikan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($var as $item) : ?>
                                        <?php if ($item['id_harga_ikan'] === $pasar1['id_harga_ikan']) : ?>


                                            <tr>
                                                <td><?= $item['created_at']; ?></td>
                                                <td><?= $item['nama_ikan']; ?></td>
                                                <td>Rp. <?= $item['harga']; ?></td>
                                            </tr>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>


    </div>
</div>
<?= $this->include('nav/f_user'); ?>