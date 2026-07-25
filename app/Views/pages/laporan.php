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
                    <th>Photografer</th>
                    <th>Jenis</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>

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

        </table>

    </div>
<?= $this->endSection() ?>