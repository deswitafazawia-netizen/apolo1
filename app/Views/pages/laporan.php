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
            <h3>1.250</h3>
            <p>Total Pelanggan</p>
        </div>

        <div class="stat-card">
            <h3>120</h3>
            <p>Total Photografer</p>
        </div>

        <div class="stat-card">
            <h3>850</h3>
            <p>Total Booking</p>
        </div>

        <div class="stat-card">
            <h3>Rp125 Jt</h3>
            <p>Total Pendapatan</p>
        </div>

    </div>
    <div class="report-filter">

        <input type="date">

        <input type="date">

        <select>
            <option>Semua Laporan</option>
            <option>Pemesanan</option>
            <option>Pembayaran</option>
            <option>Proyek Lelang</option>
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
                <tr>
                    <td>BK001</td>
                    <td>10/06/2026</td>
                    <td>Andi</td>
                    <td>Ichall Photograph</td>
                    <td>Wedding</td>
                    <td>Rp3.500.000</td>
                    <td>Selesai</td>
                </tr>
            </tbody>

        </table>

    </div>
<?= $this->endSection() ?>