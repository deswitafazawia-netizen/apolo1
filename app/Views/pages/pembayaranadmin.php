<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pembayaran Admin</title>
</head>
<body>
        <div class="container">
        <nav class="navbar-container">
            <div class="nav-logo">
                <img src="<?= base_url('assets/logo.png')?>" alt="">
            </div>
            <aside class="nav-menu">
                <li>
                    <a href="<?= base_url('pengguna') ?>" class="">
                        Manajemen Pengguna
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('photography') ?>" class="">
                        Manajemen Photography
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pemesananadmin') ?>" class="">
                        Pemesanan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('proyeklelangadmin') ?>" class="">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pembayaranadmin') ?>" class="">
                        Pembayaran
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('laporan') ?>" class="">
                        Laporan
                    </a>
                </li>
            </aside>
            <div class="nav-item">
                <button class="btn-logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </nav>
    <div class="main-content">

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

    <!-- Tabel Pembayaran -->
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

</div>
</body>
</html>