<?= $this->include('nav/h_user'); ?>
<div class="container-fluid mt-3 mb-3" style="margin-left: 20px; margin-right: 20px;">

    <div class="card">
        <div class="card-body">
            <h3>
                <?= $berita['judul']; ?>
            </h3>
            <?= $berita['created_at']; ?>
            <hr>
            <?= $berita['isi_berita']; ?>
        </div>
    </div>
    <hr>
    <h4>
        Comment Section
    </h4>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('User_view/publish/' . $berita['id_berita']); ?>" method="post">
                        <!-- input data -->
                        <input name="id_login" type="text" class="form-control" value="<?= $user['id_login']; ?>" hidden>
                        Nama :
                        <div class="input-group mb-2 input-group-sm">
                            <input name="username" type="text" class="form-control" value="<?= $user['username']; ?>" disabled>
                        </div>
                        Komentar
                        <div class="form-floating">
                            <textarea name="isi" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="float-end mt-2">
                            <button class="btn btn-primary" type="submit">Publish Komentar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php foreach ($comment as $comment) : ?>
                        <b>
                            <?= $comment['username']; ?>,
                        </b>
                        mengatakan : <br>
                        <div style="font-size: smaller; font-style: italic;" class="float-end">
                            <?= $comment['created_at']; ?>
                        </div>

                        <div style="margin-left: 20px; margin-bottom: 20px;">
                            "<?= $comment['isi']; ?>"
                        </div>


                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>


<?= $this->include('nav/f_user'); ?>