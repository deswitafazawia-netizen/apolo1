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
    <title>Pembayaran photografer</title>
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
        <h2>Pembayaran Pelanggan</h2>    
        <p>Daftar pembayaran yang telah dilakukan pelanggan untuk layanan photography.</p>
    </div>

    <div class="payment-stats">

        <div class="stat-card">
            <h3>15</h3>
            <p>Total Transaksi</p>
        </div>

        <div class="stat-card">
            <h3>5</h3>
            <p>Menunggu Verifikasi</p>
        </div>

        <div class="stat-card">
            <h3>4</h3>
            <p>DP Dibayar</p>
        </div>

        <div class="stat-card">
            <h3>6</h3>
            <p>Lunas</p>
        </div>

    </div>

    <!-- Daftar Pembayaran -->

    <div class="payment-container">

        <div class="payment-card">

            <div class="payment-info">

                <h3>Wedding Photography</h3>

                <p><strong>Pelanggan :</strong> Siti Sarifatul Badriyah</p>
                <p><strong>ID Booking :</strong> BK001</p>
                <p><strong>Tanggal Bayar :</strong> 12 Juni 2026</p>

            </div>

            <div class="payment-status">

                <span class="status waiting">
                    Menunggu Verifikasi
                </span>

                <h4>Rp 750.000</h4>

            </div>

            <div class="payment-action">

                <a href="#" class="btn-detail">
                    Detail
                </a>

                <a href="#" class="btn-verify">
                    Verifikasi
                </a>

            </div>

        </div>

        <div class="payment-card">

            <div class="payment-info">

                <h3>Prewedding Photography</h3>

                <p><strong>Pelanggan :</strong> Ahmad Fauzi</p>
                <p><strong>ID Booking :</strong> BK002</p>
                <p><strong>Tanggal Bayar :</strong> 10 Juni 2026</p>

            </div>

            <div class="payment-status">

                <span class="status dp">
                    DP Dibayar
                </span>

                <h4>Rp 1.000.000</h4>

            </div>

            <div class="payment-action">

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

        <div class="payment-card">

            <div class="payment-info">

                <h3>Wisuda Photography</h3>

                <p><strong>Pelanggan :</strong> Deswita Fazawia</p>
                <p><strong>ID Booking :</strong> BK003</p>
                <p><strong>Tanggal Bayar :</strong> 08 Juni 2026</p>

            </div>

            <div class="payment-status">

                <span class="status success">
                    Lunas
                </span>

                <h4>Rp 850.000</h4>

            </div>

            <div class="payment-action">

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

    </div>

</div>
</body>
</html>