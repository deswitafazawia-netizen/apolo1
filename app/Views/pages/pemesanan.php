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
    <title>Pemesanan Pelanggan</title>
</head>
<body>
    <div class="container">
        <nav class="navbar-container">
            <div class="nav-logo">
                <img src="<?= base_url('assets/logo.png')?>" alt="">
            </div>
            <aside class="nav-menu">
                <li>
                    <a href="<?= base_url('dashboard') ?>" class="">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('photografer') ?>" class="">
                        Photografer
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('proyeklelangpelanggan') ?>" class="">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pemesanan') ?>" class="">
                        Pemesanan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('statuspembayaranpelanggan') ?>" class="">
                        Pembayaran
                    </a>
                </li>
            </aside>
            <div class="nav-item">
                <div class="nav-search">
                    <input type="text" placeholder="Cari Photografer">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                <div class="nav-user">
                    <img src="<?= base_url('assets/profilichall.png')?>" alt="">
                </div>
                <button class="btn-logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </nav>
    <div class="main-content">

    <div class="page-header">
        <h2>Daftar Pemesanan</h2>
        <p>Kelola seluruh pemesanan jasa photography yang telah dibuat pelanggan.</p>
    </div>

    <div class="order-container">

        <div class="order-card">
            <div class="order-info">
                <h3>Wedding Photography</h3>
                <p>Pelanggan : Siti Sarifatul Badriyah</p>
                <p>Photografer : Ichall Photograph</p>
                <p>Tanggal Acara : 15 Juli 2026</p>
                <p>Lokasi : Pamekasan</p>
            </div>

            <div class="order-detail">
                <span class="status pending">
                    Menunggu Pembayaran
                </span>

                <h4>Rp 2.500.000</h4>

                <a href="#" class="btn-detail">
                    Detail
                </a>
            </div>
        </div>


    </div>

</div>
</body>
</html>