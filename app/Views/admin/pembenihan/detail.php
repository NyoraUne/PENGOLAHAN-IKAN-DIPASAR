            <?= $this->include('nav/head'); ?>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            Data Ikan
                            <hr>
                            <div class="mb-1">
                                <b>Nama Ikan : <br></b>
                                <?= $pembenihan['nama_ikan']; ?>
                            </div>
                            <div class="mb-1">
                                <b>Habitat Ikan : <br></b>
                                <?= $pembenihan['habitat']; ?>
                            </div>
                            <div class="mb-1">
                                <b>Deskripsi Ikan : <br></b>
                                <?= $pembenihan['deskripsi_ikan']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Data Pembenihan
                            <hr>
                            <?= $this->include('alert/index'); ?>

                            <form action="<?= base_url('Con_pembenihan/simpan_edit/' . $pembenihan['id_pembenihan']); ?>" method="post">
                                <div class="row">
                                    <div class="col">


                                        <!-- lokasi_benih -->
                                        Lokasi Benih :
                                        <input name="id_ikan" type="text" class="form-control" id="lokasi_benih" value="<?= $pembenihan['id_ikan']; ?>" hidden>
                                        <div class="form-group mb-2">
                                            <input name="lokasi_benih" type="text" class="form-control" id="lokasi_benih" value="<?= $pembenihan['lokasi_benih']; ?>">
                                        </div>



                                        <!-- jumlah_betina -->
                                        <label for="jumlah_betina">Jumlah Betina:</label>
                                        <div class="input-group mb-2">
                                            <input name="jumlah_betina" type="number" class="form-control" id="jumlah_betina" value="<?= $pembenihan['jumlah_betina']; ?>">
                                            <span class="input-group-text">Kg</span>
                                        </div>



                                        <!-- jumlah_telur -->
                                        <label for="jumlah_telur">Jumlah Telur:</label>
                                        <div class="input-group mb-2">
                                            <input name="jumlah_telur" type="number" class="form-control" id="jumlah_telur" value="<?= $pembenihan['jumlah_telur']; ?>">
                                            <span class="input-group-text">Kg</span>
                                        </div>



                                        <!-- keterangan -->
                                        <div class="form-group mb-2">
                                            <label for="keterangan">Keterangan:</label>
                                            <textarea name="keterangan" class="form-control" id="keterangan" rows="3"><?= $pembenihan['keterangan']; ?></textarea>
                                        </div>



                                    </div>
                                    <div class="col">

                                        <!-- tgl_benih -->
                                        <div class="form-group mb-2">
                                            <label for="tgl_benih">Tanggal Benih:</label>
                                            <input type="date" name="tgl_benih" class="form-control" id="tgl_benih" value="<?= $pembenihan['tgl_benih']; ?>">
                                        </div>

                                        <!-- jumlah_jantan -->
                                        <label for="jumlah_jantan">Jumlah Jantan:</label>
                                        <div class="input-group mb-2">
                                            <input name="jumlah_jantan" type="number" class="form-control" id="jumlah_jantan" value="<?= $pembenihan['jumlah_jantan']; ?>">
                                            <span class="input-group-text">Kg</span>
                                        </div>

                                        <!-- metode -->
                                        <div class="form-group mb-2">
                                            <label for="metode">Metode:</label>
                                            <select name="metode" class="form-control" id="metode">
                                                <option value="Pembenihan Alami (Spontaneous Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Alami (Spontaneous Spawning)') echo 'selected'; ?>>Pembenihan Alami (Spontaneous Spawning)</option>
                                                <option value="Pembenihan Buatan (Artificial Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Buatan (Artificial Spawning)') echo 'selected'; ?>>Pembenihan Buatan (Artificial Spawning)</option>
                                                <option value="Pembenihan Induksi (Induced Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Induksi (Induced Spawning)') echo 'selected'; ?>>Pembenihan Induksi (Induced Spawning)</option>
                                                <option value="Pembenihan Ikan Tanpa Air (Breeding without Water)" <?php if ($pembenihan['metode'] == 'Pembenihan Ikan Tanpa Air (Breeding without Water)') echo 'selected'; ?>>Pembenihan Ikan Tanpa Air (Breeding without Water)</option>
                                                <option value="Pembenihan Tertutup (Closed System Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Tertutup (Closed System Spawning)') echo 'selected'; ?>>Pembenihan Tertutup (Closed System Spawning)</option>
                                                <option value="Pembenihan Terbuka (Open System Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Terbuka (Open System Spawning)') echo 'selected'; ?>>Pembenihan Terbuka (Open System Spawning)</option>
                                                <option value="Pembenihan Khusus (Selective Breeding)" <?php if ($pembenihan['metode'] == 'Pembenihan Khusus (Selective Breeding)') echo 'selected'; ?>>Pembenihan Khusus (Selective Breeding)</option>
                                                <option value="Pembenihan Massal (Mass Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Massal (Mass Spawning)') echo 'selected'; ?>>Pembenihan Massal (Mass Spawning)</option>
                                                <option value="Pembenihan Monoseks (Monosex Spawning)" <?php if ($pembenihan['metode'] == 'Pembenihan Monoseks (Monosex Spawning)') echo 'selected'; ?>>Pembenihan Monoseks (Monosex Spawning)</option>
                                            </select>
                                        </div>

                                        <!-- status_benih -->
                                        <div class="form-group mb-2">
                                            <label for="status_benih">Status Benih:</label>
                                            <select name="status_benih" class="form-control" id="status_benih">
                                                <option value="Proses" <?php if ($pembenihan['status_benih'] == 'Proses') echo 'selected'; ?>>Proses</option>
                                                <option value="Sukses" <?php if ($pembenihan['status_benih'] == 'Sukses') echo 'selected'; ?>>Sukses</option>
                                                <option value="Gagal" <?php if ($pembenihan['status_benih'] == 'Gagal') echo 'selected'; ?>>Gagal</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="float-end">
                                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            <a href="<?= base_url('Con_pembenihan/hapus_data/' . $pembenihan['id_pembenihan']); ?>" type="submit" class="btn btn-danger" onclick="return confirmAction(event)">Hapus Data</a>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('nav/foot'); ?>