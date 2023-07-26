<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>
<div class="card">
    <div class="card-body">
        Filter Laporan
        <hr>
        <form action="<?= base_url('Lap_berita/filter'); ?>" method="post">
            <div class="row">
                <div class="col-5">
                    <!-- input data -->
                    Tanggal Mulai :
                    <div class="input-group mb-2 ">
                        <input name="tm" type="date" class="form-control">
                    </div>

                </div>
                <div class="col-5">
                    <!-- input data -->
                    Tanggal Terakhir
                    <div class="input-group mb-2 ">
                        <input name="ta" type="date" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <br>
                    <div class="d-grid gap-1">
                        <button class="btn btn-primary" type="submit">Review</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        Laporan Komentar
        <hr>
        <form action="<?= base_url('Lap_berita/filter_comment'); ?>" method="post">
            <div class="row">
                <div class="col-5">
                    <!-- input data -->
                    Tanggal Mulai :
                    <div class="input-group mb-2 ">
                        <input name="tm" type="date" class="form-control">
                    </div>

                </div>
                <div class="col-5">
                    <!-- input data -->
                    Tanggal Terakhir
                    <div class="input-group mb-2 ">
                        <input name="ta" type="date" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <br>
                    <div class="d-grid gap-1">
                        <button class="btn btn-primary" type="submit">Review</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <table id="tb1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Berita</th>
                    <th>Comment</th>
                    <th>Publish Date</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($comment as $comment) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $comment['username']; ?></td>
                        <td><?= $comment['judul']; ?></td>
                        <td><?= $comment['isi']; ?></td>
                        <td><?= $comment['dibuat']; ?></td>
                        <td>
                            <a href="<?= base_url('Lap_berita/hapus_comment/' . $comment['id_comment']); ?>" class="btn btn-outline-danger btn-ssm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->include('nav/foot'); ?>