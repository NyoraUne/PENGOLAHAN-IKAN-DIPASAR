<?= $this->include('nav/h_user'); ?>
<div class="container-fluid mt-3 mb-3" style="margin-left: 20px; margin-right: 20px;">

    <h3>
        <?= $berita['judul']; ?>
    </h3>
    <?= $berita['created_at']; ?>
    <hr>
    <?= $berita['isi_berita']; ?>
</div>
<?= $this->include('nav/f_user'); ?>