<?= $this->include('nav/h_user'); ?>

<div class="card bg-dark text-white">
    <img src="<?= base_url('src/img/'); ?>kantor.jpeg" class="img card-img">
    <div class="card-img-overlay">
        <div class="text-center">
            <h2 class="headtext">KANTOR DINAS PERIKANAN (DISKAN) RANTAU KEBUPATEN TAPIN</h2>
            <p class="card-text">Jalan Jend. Sudirman KM. 2,5, Rantau Kiwa, Tapin Utara, Rantau Kiwa, Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71114</p>
            <img src="<?= base_url('src/img/'); ?>Tapin.png" alt="" style="width: 100px; height: auto;">

        </div>
    </div>
</div>
<hr class="mt-5">
<div class="row">
    <div class="col-5">
        <h4 class="headtext2" style="text-align: center;">Berita Terkini</h4>
        <?php foreach ($berita as $berita) : ?>
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <h5><?= $berita['judul']; ?></h5>
                    <?= $berita['created_at']; ?>
                    <hr>
                    <?php
                    // Truncate the text to 500 characters
                    $truncatedText = substr($berita['isi_berita'], 0, 500);

                    // Check if the original text was longer than 500 characters
                    if (strlen($berita['isi_berita']) > 500) {
                        // If yes, add ellipsis at the end
                        $truncatedText .= '...';
                    }
                    ?>

                    <?= $truncatedText; ?>
                </div>
                <div class="card-footer">
                    <div class="float-end">
                        <a href="<?= base_url('User_view/index/' . $berita['id_berita']); ?>" class="btn btn-primary">Lihat Postingan</a>

                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        <div class="text-center">
            <?= $pager->links('tb_berita', 'new_pag') ?>

        </div>
    </div>
    <div class="col">
        <h4 class="headtext2" style="text-align: center;">Map</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.60190366183!2d115.16760951475695!3d-2.9301815978658388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de5a494359ef851%3A0xd6a1b8498186e19d!2sDinas%20Peternakan%20Dan%20Perikanan%20Kab.%20Tapin!5e0!3m2!1sen!2sid!4v1690201778026!5m2!1sen!2sid" width="100%" height="850" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</div>


<?= $this->include('nav/f_user'); ?>