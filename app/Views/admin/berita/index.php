<?= $this->include('nav/head'); ?>
<?= $this->include('alert/index'); ?>
<div class="card">
    <div class="card-body">

        <form action="<?= base_url('Con_berita/simpan_data'); ?>" method="post">
            <!-- input data -->
            Judul Berita :
            <div class="input-group mb-2 input-group-sm">
                <input name="judul" type="text" class="form-control">
            </div>
            Isi Berita
            <textarea name="isi_berita" id="default"></textarea>
            <div class="float-end mt-2">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<hr>
<table id="tb1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($berita as $berita) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $berita['created_at']; ?></td>
                <td><?= $berita['judul']; ?></td>
                <td><?= strlen($berita['isi_berita']) > 90 ? substr($berita['isi_berita'], 0, 90) . '...' : $berita['isi_berita']; ?></td>
                <td>
                    <a href="<?= base_url('Con_berita/reviw/' . $berita['id_berita']); ?>" class="btn btn-outline-info btn-ssm">Reviw</a>
                    <a href="" class="btn btn-outline-danger btn-ssm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->include('nav/foot'); ?>
<script>
    tinymce.init({
        selector: '#default',
        width: "100%",
        height: 300,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'prewiew', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
            'table', 'emoticons', 'template', 'codesample'
        ],
        toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons',
        menu: {
            favs: {
                title: 'menu',
                items: 'code visualaid | searchreplace | emoticons'
            }
        },
        menubar: 'favs file edit view insert format tools table',
        content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
    });
</script>