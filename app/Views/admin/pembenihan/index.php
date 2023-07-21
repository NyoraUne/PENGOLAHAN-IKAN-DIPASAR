            <?= $this->include('nav/head'); ?>
            <div class="card">
                <div class="card-body">
                    <?= $this->include('alert/index'); ?>
                    <form action="<?= base_url('Con_pembenihan/tambah_data'); ?>" method="post">
                        <div class="row">
                            <div class="col">

                                <!-- Nama -->
                                Nama Ikan :
                                <div class="input-group mb-2">
                                    <select id="select" name="id_ikan" class="form-select" required>
                                        <option value=""></option>
                                        <?php foreach ($ikan as $ikan) : ?>
                                            <option value="<?= $ikan['id_ikan']; ?>"><?= $ikan['id_ikan']; ?> - <?= $ikan['nama_ikan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- lokasi_benih -->
                                Lokasi Benih :
                                <div class="form-group mb-2">
                                    <input name="lokasi_benih" type="text" class="form-control" id="lokasi_benih">
                                </div>



                                <!-- jumlah_betina -->
                                <label for="jumlah_betina">Jumlah Betina:</label>
                                <div class="input-group mb-2">
                                    <input name="jumlah_betina" type="number" class="form-control" id="jumlah_betina">
                                    <span class="input-group-text">Kg</span>
                                </div>



                                <!-- jumlah_telur -->
                                <label for="jumlah_telur">Jumlah Telur:</label>
                                <div class="input-group mb-2">
                                    <input name="jumlah_telur" type="number" class="form-control" id="jumlah_telur">
                                    <span class="input-group-text">Kg</span>
                                </div>



                                <!-- keterangan -->
                                <div class="form-group mb-2">
                                    <label for="keterangan">Keterangan:</label>
                                    <textarea name="keterangan" class="form-control" id="keterangan" rows="3"></textarea>
                                </div>


                            </div>
                            <div class="col">

                                <!-- tgl_benih -->
                                <div class="form-group mb-2">
                                    <label for="tgl_benih">Tanggal Benih:</label>
                                    <input type="date" name="tgl_benih" class="form-control" id="tgl_benih">
                                </div>

                                <!-- metode -->
                                <div class="form-group mb-2">
                                    <label for="metode">Metode:</label>
                                    <select name="metode" class="form-control" id="metode">
                                        <option value="">Pilih Metode Pembenihan</option>
                                        <option value="Pembenihan Alami (Spontaneous Spawning)">Pembenihan Alami (Spontaneous Spawning)</option>
                                        <option value="Pembenihan Buatan (Artificial Spawning)">Pembenihan Buatan (Artificial Spawning)</option>
                                        <option value="Pembenihan Induksi (Induced Spawning)">Pembenihan Induksi (Induced Spawning)</option>
                                        <option value="Pembenihan Ikan Tanpa Air (Breeding without Water)">Pembenihan Ikan Tanpa Air (Breeding without Water)</option>
                                        <option value="Pembenihan Tertutup (Closed System Spawning)">Pembenihan Tertutup (Closed System Spawning)</option>
                                        <option value="Pembenihan Terbuka (Open System Spawning)">Pembenihan Terbuka (Open System Spawning)</option>
                                        <option value="Pembenihan Khusus (Selective Breeding)">Pembenihan Khusus (Selective Breeding)</option>
                                        <option value="Pembenihan Massal (Mass Spawning)">Pembenihan Massal (Mass Spawning)</option>
                                        <option value="Pembenihan Monoseks (Monosex Spawning)">Pembenihan Monoseks (Monosex Spawning)</option>
                                    </select>
                                </div>

                                <!-- jumlah_jantan -->
                                <label for="jumlah_jantan">Jumlah Jantan:</label>
                                <div class="input-group mb-2">
                                    <input name="jumlah_jantan" type="number" class="form-control" id="jumlah_jantan">
                                    <span class="input-group-text">Kg</span>
                                </div>

                                <!-- status_benih -->
                                <div class="form-group mb-2">
                                    <label for="status_benih">Status Benih:</label>
                                    <select name="status_benih" class="form-control" id="status_benih">
                                        <option value="">Pilih Status Benih</option>
                                        <option value="Proses">Proses</option>
                                        <option value="Sukses">Sukses</option>
                                        <option value="Gagal">Gagal</option>
                                    </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <table id="tb1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ikan</th>
                        <th>Tgl Pembenihan</th>
                        <th>Metode Pembenihan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($pembenihan as $pembenihan) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $pembenihan['nama_ikan']; ?></td>
                            <td><?= $pembenihan['tgl_benih']; ?></td>
                            <td><?= $pembenihan['metode']; ?></td>
                            <td><?= $pembenihan['status_benih']; ?></td>
                            <td>
                                <a href="<?= base_url('Con_pembenihan/detail/' . $pembenihan['id_pembenihan']); ?>" class="btn btn-outline-info btn-ssm">Detail Data</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->include('nav/foot'); ?>