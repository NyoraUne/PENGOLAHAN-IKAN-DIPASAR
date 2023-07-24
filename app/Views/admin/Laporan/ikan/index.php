<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>
<div class="card">
    <div class="card-body">
        Filter Laporan
        <hr>
        <form action="<?= base_url('Lap_ikan/filter'); ?>" method="post">
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
                    <div class="d-grid gap-1">
                        <button class="btn btn-primary" type="submit">Review</button>
                        <button class="btn btn-primary" type="submit">Save (PDF)</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->include('nav/foot'); ?>