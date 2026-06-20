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
    <title>Manajemen Photography</title>
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
        <h2>Manajemen Photography</h2>
        <p>Kelola kategori photography dan jenis photography yang tersedia pada sistem.</p>
    </div>

    <div class="stats-container">

        <div class="stats-card">
            <h3>10</h3>
            <p>Kategori Photography</p>
        </div>

        <div class="stats-card">
            <h3>35</h3>
            <p>Jenis Photography</p>
        </div>

        <div class="stats-card">
            <h3>65</h3>
            <p>Photografer Aktif</p>
        </div>

        <div class="stats-card">
            <h3>120</h3>
            <p>Layanan Digunakan</p>
        </div>

    </div>

    <div class="table-container">

        <div class="table-header">
            <h3>Data Kategori Photography</h3>

            <button class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Kategori
            </button>
        </div>

        <table class="user-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>KTR001</td>
                    <td>Wedding</td>
                    <td>Dokumentasi acara pernikahan</td>
                    <td>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>

                <tr>
                    <td>KTR002</td>
                    <td>Prewedding</td>
                    <td>Foto prewedding pasangan</td>
                    <td>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>

                <tr>
                    <td>KTR003</td>
                    <td>Graduation</td>
                    <td>Foto wisuda dan kelulusan</td>
                    <td>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

    <div class="table-container">

        <div class="table-header">
            <h3>Data Jenis Photography</h3>

            <button class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Jenis
            </button>
        </div>

        <table class="user-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Nama Jenis</th>
                    <th>Harga Dasar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>JNS001</td>
                    <td>Wedding</td>
                    <td>Wedding Silver Package</td>
                    <td>Rp2.500.000</td>
                    <td>Paket dokumentasi wedding standar</td>
                    <td>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>

                <tr>
                    <td>JNS002</td>
                    <td>Wedding</td>
                    <td>Wedding Gold Package</td>
                    <td>Rp4.500.000</td>
                    <td>Paket dokumentasi wedding premium</td>
                    <td>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>

                <tr>
                    <td>JNS003</td>
                    <td>Graduation</td>
                    <td>Graduation Outdoor</td>
                    <td>Rp500.000</td>
                    <td>Foto wisuda outdoor</td>
                    <td>
                        <button class="btn-detail">Detail</button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>
</body>
</html>