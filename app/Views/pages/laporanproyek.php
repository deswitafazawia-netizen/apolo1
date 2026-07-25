<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <section class="report-header"> 
        <span>REPORTS CENTER</span>
        <h1>Laporan & Statistik Sistem</h1>
        <p>
            Kelola dan pantau seluruh aktivitas marketplace photography.
        </p>
    </section>
    <div class="stats-grid">

        <div class="stat-card">
            <h3><?= $totalPelanggan; ?></h3>
            <p>Total Pelanggan</p>
        </div>

        <div class="stat-card">
            <h3><?= $totalPhotografer; ?></h3>
            <p>Total Photografer</p>
        </div>

        <div class="stat-card">
            <h3><?= $total ?></h3>
            <p>Total Booking</p>
        </div>

    </div>
    <div class="report-filter">

        <input type="date">

        <input type="date">

        <select onchange="if(this.value) window.location=this.value;">

            <option value="<?= base_url('dashboard/laporan') ?>" selected>
                Pemesanan Jasa
            </option>

            <option value="<?= base_url('dashboard/laporanproyek') ?>">
                Proyek Lelang
            </option>

        </select>

        <button>Tampilkan</button>
        <button>Export PDF</button>

    </div>
    <div class="report-table">
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Judul Proyek</th>
                <th>Lokasi</th>
                <th>Budget</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($laporanProyek as $p): ?>

        <tr>

            <td>PRJ<?= str_pad($p['id_proyek'],3,'0',STR_PAD_LEFT); ?></td>

            <td><?= date('d/m/Y',strtotime($p['tgl_dibuat'])) ?></td>

            <td><?= esc($p['nama_pelanggan']) ?></td>

            <td><?= esc($p['judul_proyek']) ?></td>

            <td><?= esc($p['lokasi']) ?></td>

            <td>Rp <?= number_format($p['budget'],0,',','.') ?></td>

            <td><?= esc($p['nama_status']) ?></td>

        </tr>

        <?php endforeach; ?>

        </tbody>
        </table>

    </div>
<?= $this->endSection() ?>