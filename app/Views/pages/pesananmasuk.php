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
    <title>Pesanan masuk</title>
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
                    <a href="<?= base_url('pesananmasuk') ?>" class="">
                        Pesanan Masuk
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('proyeklelangphotografer') ?>" class="">
                        Proyek Lelang
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pembayaranphotografer') ?>" class="">
                        Pembayaran
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('rating') ?>" class="">
                        Rating & Ulasan
                    </a>
                </li>
            </aside>
            <div class="nav-item">
                <div class="nav-user">
                    <img src="<?= base_url('assets/profilichall.png')?>" alt="">
                </div>
                <button class="btn-logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </nav>
    <div class="main-content">

    <div class="page-header">
        <h2>Pesanan Masuk</h2>
        <p>Daftar pesanan yang diajukan pelanggan kepada Anda.</p>
    </div>

    <div class="stats-container">

        <div class="stat-card">
            <h3>12</h3>
            <p>Total Pesanan</p>
        </div>

        <div class="stat-card">
            <h3>5</h3>
            <p>Menunggu Konfirmasi</p>
        </div>

        <div class="stat-card">
            <h3>4</h3>
            <p>Diterima</p>
        </div>

        <div class="stat-card">
            <h3>3</h3>
            <p>Selesai</p>
        </div>

    </div>

    <!-- Daftar Pesanan -->

    <div class="order-container">

        <!-- Card Pesanan -->

        <div class="order-card">

            <div class="order-left">

                <h3>Wedding Photography</h3>

                <p><strong>Pelanggan :</strong> Siti Sarifatul Badriyah</p>
                <p><strong>Tanggal Acara :</strong> 20 Juli 2026</p>
                <p><strong>Lokasi :</strong> Pamekasan</p>
                <p><strong>Durasi :</strong> 8 Jam</p>

            </div>

            <div class="order-center">

                <span class="status pending">
                    Menunggu Konfirmasi
                </span>

                <h4>Rp 2.500.000</h4>

            </div>

            <div class="order-right">

                <a href="#" class="btn-accept">
                    Terima
                </a>

                <a href="#" class="btn-reject">
                    Tolak
                </a>

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

        <div class="order-card">

            <div class="order-left">

                <h3>Prewedding Photography</h3>

                <p><strong>Pelanggan :</strong> Ahmad Fauzi</p>
                <p><strong>Tanggal Acara :</strong> 28 Juli 2026</p>
                <p><strong>Lokasi :</strong> Sumenep</p>
                <p><strong>Durasi :</strong> 5 Jam</p>

            </div>

            <div class="order-center">

                <span class="status accepted">
                    Diterima
                </span>

                <h4>Rp 1.800.000</h4>

            </div>

            <div class="order-right">

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

        <div class="order-card">

            <div class="order-left">

                <h3>Wisuda Photography</h3>

                <p><strong>Pelanggan :</strong> Deswita Fazawia</p>
                <p><strong>Tanggal Acara :</strong> 15 Agustus 2026</p>
                <p><strong>Lokasi :</strong> Bangkalan</p>
                <p><strong>Durasi :</strong> 3 Jam</p>

            </div>

            <div class="order-center">

                <span class="status completed">
                    Selesai
                </span>

                <h4>Rp 850.000</h4>

            </div>

            <div class="order-right">

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

    </div>

</div>
</body>
</html>