<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h1>Data Pembayaran</h1>
        <p>Kelola dan verifikasi seluruh transaksi pembayaran pelanggan.</p>
    </div>
    <div class="stats-container">

        <div class="stats-card">
            <div class="stats-icon">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <div>
                <h3>128</h3>
                <p>Total Transaksi</p>
            </div>
        </div>

        <div class="stats-card">
            <div class="stats-icon warning">
                <i class="fas fa-clock"></i>
            </div>
            <div>
                <h3>15</h3>
                <p>Menunggu Verifikasi</p>
            </div>
        </div>

        <div class="stats-card">
            <div class="stats-icon info">
                <i class="fas fa-wallet"></i>
            </div>
            <div>
                <h3>37</h3>
                <p>DP Dibayar</p>
            </div>
        </div>

        <div class="stats-card">
            <div class="stats-icon success">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <h3>76</h3>
                <p>Lunas</p>
            </div>
        </div>

    </div>
    <div class="table-container">

        <div class="table-header">
            <h2>Data Pembayaran</h2>
        </div>

        <div class="table-responsive">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID Pembayaran</th>
                        <th>ID Pemesanan</th>
                        <th>Pelanggan</th>
                        <th>Photografer</th>
                        <th>Total Tagihan</th>
                        <th>Metode</th>
                        <th>Status</th>
                        <th>Tanggal Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>BYR001</td>
                        <td>PSN001</td>
                        <td>Sasa</td>
                        <td>Roki Studio</td>
                        <td>Rp 2.500.000</td>
                        <td>Transfer Bank</td>
                        <td>
                            <span class="badge-pending">
                                Menunggu Verifikasi
                            </span>
                        </td>
                        <td>15 Juni 2026</td>
                        <td>
                            <button class="btn-detail">Detail</button>
                            <button class="btn-verifikasi">Verifikasi</button>
                        </td>
                    </tr>

                    <tr>
                        <td>BYR002</td>
                        <td>PSN002</td>
                        <td>Andi</td>
                        <td>Apollo Visual</td>
                        <td>Rp 1.500.000</td>
                        <td>Transfer Bank</td>
                        <td>
                            <span class="badge-dp">
                                DP Dibayar
                            </span>
                        </td>
                        <td>16 Juni 2026</td>
                        <td>
                            <button class="btn-detail">Detail</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>

                    <tr>
                        <td>BYR003</td>
                        <td>PSN003</td>
                        <td>Putri</td>
                        <td>Lens Art Studio</td>
                        <td>Rp 3.000.000</td>
                        <td>E-Wallet</td>
                        <td>
                            <span class="badge-success">
                                Lunas
                            </span>
                        </td>
                        <td>17 Juni 2026</td>
                        <td>
                            <button class="btn-detail">Detail</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td>BYR004</td>
                        <td>PSN004</td>
                        <td>Dewi</td>
                        <td>Creative Shot</td>
                        <td>Rp 2.000.000</td>
                        <td>Transfer Bank</td>
                        <td>
                            <span class="badge-reject">
                                Ditolak
                            </span>
                        </td>
                        <td>18 Juni 2026</td>
                        <td>
                            <button class="btn-detail">Detail</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
<?= $this->endSection() ?>