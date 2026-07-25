<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>
    <?php $role = session()->get('role');?>
    <div class="container">
        <nav class="navbar">
            <div class="navbar-inner">
                <div class="navbar-left">
                    <button class="nav-toggle" id="navToggle">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <a href="<?= base_url('dashboard') ?>" class="navbar-brand">
                        <img src="<?= base_url('assets/logo.png')?>" alt="">
                    </a>
                </div>

                <ul class="navbar-menu" id="navbarMenu">
                    <?php if ($role === 'admin') : ?>
                    <li><a href="<?= base_url('dashboard/pengguna') ?>"><i class="fa-solid fa-users"></i> Pengguna</a></li>
                    <li><a href="<?= base_url('dashboard/photography') ?>"><i class="fa-solid fa-camera"></i> Photography</a></li>
                    <li><a href="<?= base_url('dashboard/pemesanan') ?>"><i class="fa-solid fa-clipboard-list"></i> Pemesanan</a></li>
                    <li><a href="<?= base_url('dashboard/proyeklelang') ?>"><i class="fa-solid fa-gavel"></i> Proyek Lelang</a></li>
                    <li><a href="<?= base_url('dashboard/pembayaran') ?>"><i class="fa-solid fa-credit-card"></i> Pembayaran</a></li>
                    <li><a href="<?= base_url('dashboard/laporan') ?>"><i class="fa-solid fa-chart-bar"></i> Laporan</a></li>
                    <li><a href="<?= base_url('dashboard/rating') ?>"><i class="fa-solid fa-star"></i> Rating</a></li>
                    <?php endif; ?>
                    <?php if ($role === 'pelanggan') : ?>
                    <li><a href="<?= base_url('dashboard') ?>"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    <li><a href="<?= base_url('dashboard/photografer') ?>"><i class="fa-solid fa-camera-retro"></i> Photografer</a></li>
                    <li><a href="<?= base_url('dashboard/chat/pelanggan-inbox') ?>"><i class="fa-solid fa-comments"></i> Chat</a></li>
                    <li><a href="<?= base_url('dashboard/proyeklelang') ?>"><i class="fa-solid fa-gavel"></i> Proyek Lelang</a></li>
                    <li><a href="<?= base_url('dashboard/pemesanan') ?>"><i class="fa-solid fa-clipboard-list"></i> Pemesanan</a></li>
                    <li><a href="<?= base_url('dashboard/pembayaran') ?>"><i class="fa-solid fa-credit-card"></i> Pembayaran</a></li>
                    <li><a href="<?= base_url('dashboard/rating') ?>"><i class="fa-solid fa-star"></i> Rating</a></li>
                    <li><a href="<?= base_url('dashboard/profil') ?>"><i class="fa-solid fa-user"></i> Profil</a></li>
                    <?php endif; ?>
                    <?php if ($role === 'photografer') : ?>
                    <li><a href="<?= base_url('dashboard') ?>"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    <li><a href="<?= base_url('dashboard/pemesanan') ?>"><i class="fa-solid fa-envelope"></i> Pesanan Masuk</a></li>
                    <li><a href="<?= base_url('dashboard/chat/inbox') ?>"><i class="fa-solid fa-comments"></i> Chat</a></li>
                    <li><a href="<?= base_url('dashboard/proyeklelang') ?>"><i class="fa-solid fa-gavel"></i> Proyek Lelang</a></li>
                    <li><a href="<?= base_url('dashboard/pembayaran') ?>"><i class="fa-solid fa-credit-card"></i> Pembayaran</a></li>
                    <li><a href="<?= base_url('dashboard/rating') ?>"><i class="fa-solid fa-star"></i> Rating</a></li>
                    <li><a href="<?= base_url('dashboard/profil') ?>"><i class="fa-solid fa-user"></i> Profil</a></li>
                    <?php endif; ?>
                </ul>

                <div class="navbar-right">
                    <div class="nav-user">
                        <img src="<?= base_url('uploads/profil/' . (session()->get('foto') ?: 'default.png')) ?>" alt="Foto Profil">
                        <span class="nav-user-name"><?= session()->get('username') ?: 'User' ?></span>
                    </div>
                    <a href="<?= base_url('logout') ?>" class="btn-logout">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </div>
            </div>
        </nav>

        <main class="main-content">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>
