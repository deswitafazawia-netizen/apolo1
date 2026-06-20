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
    <title>Pemesanan Admin</title>
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
        <h1>Data Pemesanan</h1>
        <p>Kelola seluruh data pemesanan jasa photografer.</p>
    </div>

    <!-- Statistik -->
    <div class="stats-container">

        <div class="stats-card">
            <div class="stats-icon">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div>
                <h3>156</h3>
                <p>Total Pemesanan</p>
            </div>
        </div>

        <div class="stats-card">
            <div class="stats-icon warning">
                <i class="fas fa-clock"></i>
            </div>
            <div>
                <h3>24</h3>
                <p>Menunggu Konfirmasi</p>
            </div>
        </div>

        <div class="stats-card">
            <div class="stats-icon info">
                <i class="fas fa-camera"></i>
            </div>
            <div>
                <h3>87</h3>
                <p>Sedang Berjalan</p>
            </div>
        </div>

        <div class="stats-card">
            <div class="stats-icon success">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <h3>45</h3>
                <p>Selesai</p>
            </div>
        </div>

    </div>

    <!-- Table -->
    <div class="table-container">

        <div class="table-header">
            <h2>Data Pemesanan</h2>
        </div>

        <div class="table-responsive">
            <table class="user-table">

                <thead>
                    <tr>
                        <th>ID Pemesanan</th>
                        <th>Pelanggan</th>
                        <th>Photografer</th>
                        <th>Jenis Photography</th>
                        <th>Tanggal Acara</th>
                        <th>Lokasi</th>
                        <th>Total Biaya</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>PSN001</td>
                        <td>Sasa</td>
                        <td>Roki Studio</td>
                        <td>Wedding Photography</td>
                        <td>20 Juni 2026</td>
                        <td>Pamekasan</td>
                        <td>Rp 3.500.000</td>
                        <td>
                            <span class="badge-pending">
                                Menunggu Konfirmasi
                            </span>
                        </td>
                        <td>
                            <button class="btn-detail">Detail</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>

                    <tr>
                        <td>PSN002</td>
                        <td>Andi</td>
                        <td>Apollo Visual</td>
                        <td>Prewedding</td>
                        <td>25 Juni 2026</td>
                        <td>Surabaya</td>
                        <td>Rp 2.500.000</td>
                        <td>
                            <span class="badge-process">
                                Diproses
                            </span>
                        </td>
                        <td>
                            <button class="btn-detail">Detail</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>

                    <tr>
                        <td>PSN003</td>
                        <td>Putri</td>
                        <td>Lens Art Studio</td>
                        <td>Graduation</td>
                        <td>30 Juni 2026</td>
                        <td>Malang</td>
                        <td>Rp 1.200.000</td>
                        <td>
                            <span class="badge-success">
                                Selesai
                            </span>
                        </td>
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