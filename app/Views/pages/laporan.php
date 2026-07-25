<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <section class="report-header"> 
        <span>REPORTS CENTER</span>
        <h1>Laporan Pemesanan & Proyek Lelang</h1>
        <p>Pantau seluruh data pemesanan dan proyek lelang marketplace photography.</p>
    </section>

    <div class="stats-grid">
        <div class="stat-card">
<<<<<<< HEAD
            <h3><?= $totalPelanggan; ?></h3>
            <p>Total Pelanggan</p>
=======
            <h3><?= $totalSemua ?></h3>
            <p>Total Semua Data</p>
>>>>>>> origin/rahmat-devops
        </div>
        <div class="stat-card">
<<<<<<< HEAD
            <h3><?= $totalPhotografer; ?></h3>
            <p>Total Photografer</p>
=======
            <h3><?= $totalPemesanan ?></h3>
            <p>Total Pemesanan</p>
>>>>>>> origin/rahmat-devops
        </div>
        <div class="stat-card">
<<<<<<< HEAD
            <h3><?= $total ?></h3>
            <p>Total Booking</p>
        </div>

=======
            <h3><?= $totalProyek ?></h3>
            <p>Total Proyek Lelang</p>
        </div>
>>>>>>> origin/rahmat-devops
    </div>

<<<<<<< HEAD
        <input type="date">

        <input type="date">

        <select onchange="if(this.value) window.location=this.value;">

            <option value="<?= base_url('dashboard/laporan') ?>" selected>
                Pemesanan Jasa
            </option>

            <option value="<?= base_url('dashboard/laporanproyek') ?>">
                Proyek Lelang
            </option>

=======
    <form class="report-filter" method="GET" action="<?= base_url('dashboard/laporan') ?>">
        <input type="date" name="tanggal_awal" value="<?= $tanggal_awal ?>" placeholder="Tanggal Awal">
        <input type="date" name="tanggal_akhir" value="<?= $tanggal_akhir ?>" placeholder="Tanggal Akhir">
        <select name="kategori">
            <option value="semua" <?= $kategori === 'semua' ? 'selected' : '' ?>>Semua Laporan</option>
            <option value="pemesanan" <?= $kategori === 'pemesanan' ? 'selected' : '' ?>>Pemesanan</option>
            <option value="proyek" <?= $kategori === 'proyek' ? 'selected' : '' ?>>Proyek Lelang</option>
>>>>>>> origin/rahmat-devops
        </select>
        <button type="submit">Tampilkan</button>
        <a href="<?= base_url('dashboard/laporan') ?>" style="background:#333;color:#fff;padding:12px 20px;border-radius:10px;text-decoration:none;">Reset</a>
    </form>

<<<<<<< HEAD

        <button>Tampilkan</button>
        <button>Export PDF</button>

=======
    <?php if ($kategori === 'semua' || $kategori === 'pemesanan'): ?>
    <div style="margin-bottom:15px;">
        <h3 style="color:#c8102e;font-size:20px;">Data Pemesanan (<?= $totalPemesanan ?> data)</h3>
>>>>>>> origin/rahmat-devops
    </div>
    <div class="report-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Photografer</th>
                    <th>Jenis</th>
                    <th>Lokasi</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
<<<<<<< HEAD

        <tbody>

        <?php if(!empty($laporan)): ?>

            <?php foreach($laporan as $l): ?>

            <tr>

                <td>
                    PMS<?= str_pad($l['id_pemesanan'],3,'0',STR_PAD_LEFT); ?>
                </td>

                <td>
                    <?= date('d/m/Y', strtotime($l['tgl_pemesanan'])) ?>
                </td>

                <td>
                    <?= esc($l['nama_pelanggan']) ?>
                </td>

                <td>
                    <?= esc($l['nama_photografer']) ?>
                </td>

                <td>
                    <?= esc($l['nama_jenis']) ?>
                </td>

                <td>
                    Rp <?= number_format($l['total_harga'],0,',','.') ?>
                </td>

                <td>
                    <?= esc($l['nama_status']) ?>
                </td>

            </tr>

            <?php endforeach; ?>

        <?php else: ?>

        <tr>
            <td colspan="7" style="text-align:center;">
                Tidak ada data laporan.
            </td>
        </tr>

        <?php endif; ?>

        </tbody>

=======
            <tbody>
                <?php if (empty($dataPemesanan)): ?>
                    <tr><td colspan="8" style="text-align:center;color:#888;">Tidak ada data pemesanan</td></tr>
                <?php else: ?>
                    <?php foreach ($dataPemesanan as $p): ?>
                    <tr>
                        <td>#<?= $p['id_pemesanan'] ?></td>
                        <td><?= date('d/m/Y', strtotime($p['tgl_pemesanan'])) ?></td>
                        <td><?= $p['nama_pelanggan'] ?></td>
                        <td><?= $p['nama_photografer'] ?></td>
                        <td><?= $p['nama_jenis'] ?></td>
                        <td><?= $p['lokasi'] ?></td>
                        <td>Rp <?= number_format($p['total_harga'], 0, ',', '.') ?></td>
                        <td>
                            <?php
                            $statusLabel = [
                                1 => ['Menunggu', '#f0ad4e'],
                                2 => ['Diproses', '#5bc0de'],
                                3 => ['Selesai', '#5cb85c'],
                                4 => ['Ditolak', '#d9534f'],
                                5 => ['Dibatalkan', '#777'],
                                12 => ['Verif. Pembatalan', '#c8102e'],
                            ];
                            $s = $statusLabel[$p['id_status']] ?? ['Unknown', '#555'];
                            ?>
                            <span style="background:<?= $s[1] ?>;color:#fff;padding:5px 12px;border-radius:8px;font-size:12px;"><?= $s[0] ?></span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
>>>>>>> origin/rahmat-devops
        </table>
    </div>
    <?php endif; ?>

    <?php if ($kategori === 'semua' || $kategori === 'proyek'): ?>
    <div style="margin-top:35px;margin-bottom:15px;">
        <h3 style="color:#c8102e;font-size:20px;">Data Proyek Lelang (<?= $totalProyek ?> data)</h3>
    </div>
    <div class="report-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Dibuat</th>
                    <th>Pelanggan</th>
                    <th>Judul</th>
                    <th>Tgl Acara</th>
                    <th>Lokasi</th>
                    <th>Budget</th>
                    <th>Deadline</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($dataProyek)): ?>
                    <tr><td colspan="9" style="text-align:center;color:#888;">Tidak ada data proyek lelang</td></tr>
                <?php else: ?>
                    <?php foreach ($dataProyek as $pr): ?>
                    <tr>
                        <td>#<?= $pr['id_proyek'] ?></td>
                        <td><?= date('d/m/Y', strtotime($pr['tgl_dibuat'])) ?></td>
                        <td><?= $pr['nama_pelanggan'] ?></td>
                        <td><?= $pr['judul_proyek'] ?></td>
                        <td><?= date('d/m/Y', strtotime($pr['tgl_acara'])) ?></td>
                        <td><?= $pr['lokasi'] ?></td>
                        <td>Rp <?= number_format($pr['budget'], 0, ',', '.') ?></td>
                        <td><?= date('d/m/Y', strtotime($pr['deadline_penawaran'])) ?></td>
                        <td>
                            <?php
                            $statusProyek = [
                                1 => ['Aktif', '#5cb85c'],
                                2 => ['Selesai', '#5bc0de'],
                                3 => ['Ditutup', '#777'],
                            ];
                            $sp = $statusProyek[$pr['id_status']] ?? ['Unknown', '#555'];
                            ?>
                            <span style="background:<?= $sp[1] ?>;color:#fff;padding:5px 12px;border-radius:8px;font-size:12px;"><?= $sp[0] ?></span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
<?= $this->endSection() ?>
