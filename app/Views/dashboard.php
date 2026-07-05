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
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <nav class="navbar-container">
            <div class="nav-user">
                <img src="<?= base_url('assets/logo.png')?>" alt="">
            </div>
            <aside class="nav-menu">
               <?php $role = session()->get('role');?>
                <?php if ($role === 'admin') : ?>
                <li>
                    <a href="<?= base_url('dashboard/pengguna') ?>">
                        Manajement Pengguna
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/photography') ?>">
                        Manajement Photography
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/pemesananadmin') ?>">
                        Pemesanan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/proyeklelangadmin') ?>">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/pembayaranadmin') ?>">
                        Pembayaran
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/laporan') ?>">
                        Laporan
                    </a>
                </li>
                <?php endif; ?>
                <?php if ($role === 'pelanggan') : ?>
                <li>
                    <a href="<?= base_url('dashboard') ?>">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/photografer') ?>">
                        Photografer
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/proyeklelangpelanggan') ?>">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/pemesanan') ?>">
                        Pemesanan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/statuspembayaranpelanggan') ?>">
                        Pembayaran
                    </a>
                </li>
                <?php endif; ?>
                <?php if ($role === 'photografer') : ?>
                <li>
                    <a href="<?= base_url('dashboard') ?>">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/pesananmasuk') ?>">
                        Pesanan Masuk
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/proyeklelangphotografer') ?>">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/pembayaranphotografer') ?>">
                        Pembayaran
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/rating') ?>">
                        Rating & Ulasan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard/profil') ?>">
                        Profil
                    </a>
                </li>
                <?php endif; ?>
            </aside>
            <div class="nav-item">
                <?php if ($role === 'pelanggan') : ?>
                <div class="nav-search">
                    <input type="text" placeholder="Cari Photografer">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="nav-user">
                    <img src="<?= base_url('assets/profilichall.png')?>" alt="">
                </div>
                <?php endif; ?>
                <?php if ($role === 'photografer') : ?>
                <div class="nav-user">
                    <img src="<?= base_url('assets/profilichall.png')?>" alt="">
                </div>
                <?php endif; ?>
                <a href="<?= base_url('logout') ?>" class="btn-logout">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </a>
            </div>
            
        </nav>
        <main class="main-content">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>
</html>