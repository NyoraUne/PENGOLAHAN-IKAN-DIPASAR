<?= $this->include('nav/head'); ?>
<div class="card">
    <div class="card-body">
        <b>
            <h1><?= $berita['judul']; ?></h1>
        </b>
        <?= $berita['created_at']; ?>
        <hr>
        <?= $berita['isi_berita']; ?>
    </div>
</div>
<?= $this->include('nav/foot'); ?>