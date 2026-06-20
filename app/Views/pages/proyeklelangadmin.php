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
    <title>Proyek Lelang Admin</title>
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
        <h2>Manajemen Proyek Lelang</h2>
        <p>Kelola seluruh data proyek lelang yang dibuat oleh pelanggan.</p>
    </div>


    <div class="stats-container">

        <div class="stats-card">
            <h3>120</h3>
            <p>Total Proyek</p>
        </div>

        <div class="stats-card">
            <h3>45</h3>
            <p>Proyek Aktif</p>
        </div>

        <div class="stats-card">
            <h3>60</h3>
            <p>Proyek Selesai</p>
        </div>

        <div class="stats-card">
            <h3>15</h3>
            <p>Proyek Ditutup</p>
        </div>

    </div>

    <div class="table-container">

        <div class="table-header">
            <h3>Data Proyek Lelang</h3>

            <button class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Proyek
            </button>
        </div>

        <table class="user-table">

            <thead>
                <tr>
                    <th>ID</th>

                    <th>Judul Proyek</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Acara</th>
                    <th>Lokasi</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>PRJ001</td>
                    <td>Wedding Sasa & Roki</td>
                    <td>Siti Sarifatul Badriyah</td>
                    <td>15 Juli 2026</td>
                    <td>Jember</td>
                    <td>Rp5.000.000</td>
                    <td>
                        <span class="badge badge-active">
                            Aktif
                        </span>
                    </td>
                    <td>
                        <button class="btn-detail">Detail</button>
                        <button class="btn-delete">Hapus</button>
                    </td>
                </tr>

                <tr>
                    <td>PRJ002</td>
                    <td>Wisuda Fakultas Teknik</td>
                    <td>Ahmad Fauzi</td>
                    <td>20 Juli 2026</td>
                    <td>Bondowoso</td>
                    <td>Rp1.500.000</td>
                    <td>
                        <span class="badge badge-active">
                            Aktif
                        </span>
                    </td>
                    <td>
                        <button class="btn-detail">Detail</button>
                        <button class="btn-delete">Hapus</button>
                    </td>
                </tr>

                <tr>
                    <td>PRJ003</td>
                    <td>Prewedding Outdoor</td>
                    <td>Dewi Lestari</td>
                    <td>25 Juni 2026</td>
                    <td>Banyuwangi</td>
                    <td>Rp2.500.000</td>
                    <td>
                        <span class="badge badge-complete">
                            Selesai
                        </span>
                    </td>
                    <td>
                        <button class="btn-detail">Detail</button>
                        <button class="btn-delete">Hapus</button>
                    </td>
                </tr>

                <tr>
                    <td>PRJ004</td>
                    <td>Dokumentasi Seminar</td>
                    <td>Rina Putri</td>
                    <td>30 Juli 2026</td>
                    <td>Surabaya</td>
                    <td>Rp1.000.000</td>
                    <td>
                        <span class="badge badge-closed">
                            Ditutup
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
</body>
</html>