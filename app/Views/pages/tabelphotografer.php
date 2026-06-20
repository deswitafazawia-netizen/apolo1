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
    <title>Manajemen Pengguna</title>
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
        <h2>Manajemen Pengguna</h2>
        <p>Kelola seluruh data pelanggan dan photografer yang terdaftar pada sistem.</p>
    </div>


    <div class="stats-container">

        <div class="stats-card">
            <h3>245</h3>
            <p>Total Pengguna</p>
        </div>

        <div class="stats-card">
            <h3>180</h3>
            <p>Pelanggan</p>
        </div>

        <div class="stats-card">
            <h3>65</h3>
            <p>Photografer</p>
        </div>

        <div class="stats-card">
            <h3>230</h3>
            <p>Akun Aktif</p>
        </div>

    </div>

<div class="filter-section">

    <a href="<?= base_url('pengguna') ?>" class="filter-btn">
        Pelanggan
    </a>

    <a href="<?= base_url('tabelphotografer') ?>" class="filter-btn active">
        Photografer
    </a>

</div>
    
<div class="table-container photographer-table">

    <table class="user-table">

        <thead>
            <tr>
                <th>ID Photografer</th>
                <th>Nama Photografer</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>PHG001</td>
                <td>Ichall Studio</td>
                <td>ichallstudio@gmail.com</td>
                <td>081234567890</td>
                <td>Surabaya</td>
                <td>
                    <span class="status-badge active">
                        Aktif
                    </span>
                </td>
                <td>
                    <button class="btn-detail">Detail</button>
                </td>
            </tr>

            <tr>
                <td>PHG002</td>
                <td>Rizky Photography</td>
                <td>rizkyphoto@gmail.com</td>
                <td>082345678901</td>
                <td>Malang</td>
                <td>
                    <span class="status-badge active">
                        Aktif
                    </span>
                </td>
                <td>
                    <button class="btn-detail">Detail</button>
                </td>
            </tr>

            <tr>
                <td>PHG003</td>
                <td>Fauzan Creative</td>
                <td>fauzan@gmail.com</td>
                <td>083456789012</td>
                <td>Jember</td>
                <td>
                    <span class="status-badge inactive">
                        Nonaktif
                    </span>
                </td>
                <td>
                    <button class="btn-detail">Detail</button>
                </td>
            </tr>

            <tr>
                <td>PHG004</td>
                <td>Apollo Visual</td>
                <td>apollo@gmail.com</td>
                <td>084567890123</td>
                <td>Banyuwangi</td>
                <td>
                    <span class="status-badge active">
                        Aktif
                    </span>
                </td>
                <td>
                    <button class="btn-detail">Detail</button>
                </td>
            </tr>

            <tr>
                <td>PHG005</td>
                <td>Lens Project</td>
                <td>lensproject@gmail.com</td>
                <td>085678901234</td>
                <td>Bondowoso</td>
                <td>
                    <span class="status-badge active">
                        Aktif
                    </span>
                </td>
                <td>
                    <button class="btn-detail">Detail</button>
                </td>
            </tr>

        </tbody>

    </table>

</div>
</body>
</html>