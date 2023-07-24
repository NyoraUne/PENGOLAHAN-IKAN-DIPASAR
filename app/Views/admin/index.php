<?= $this->include('nav/head'); ?>
<style>
    .img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 100%;
        height: 200px;
        filter: drop-shadow(8px 8px 10px #000);
        object-fit: cover;
        object-position: 20% 70%;
        display: block;
        margin-bottom: 20px;
    }

    @keyframes example {
        0% {
            width: 100%;
            height: 200px;
        }

        100% {
            background-color: black;
            width: 100%;
            height: 70vh;
        }
    }

    .img:hover {
        animation-name: example;
        animation-duration: 4s;
        /* animation-iteration-count: infinite; */
        animation-fill-mode: forwards;
        position: relative;
    }
</style>
<?= $this->include('alert/index'); ?>
<img src="<?= base_url('src/img/'); ?>image.jpg" class="img">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Pnegguna
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $user; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $ikan; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Pasar
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $pasar; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Penjual
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $penjual; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Harga Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $hargaikan; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Pembenihan Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $benih; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Pembesaran Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $besar; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Penangkapan Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $tangkap; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Pengolahan Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $olah; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Keluar/Masuk Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $trans; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Berita
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $berita; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <b>
                            Data Penangkapan Ikan
                        </b>
                    </div>
                    <div class="card-body">
                        <h1><?= $tangkap; ?></h1> Data Di Dapat
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->include('nav/foot'); ?>