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
    <title>Document</title>
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
                    <a href="<?= base_url('') ?>" class="">
                        Manajemen Photography
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('') ?>" class="">
                        Pemesanan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('') ?>" class="">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('') ?>" class="">
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
    <main class="main-content">

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

</main>
</body>
</html>