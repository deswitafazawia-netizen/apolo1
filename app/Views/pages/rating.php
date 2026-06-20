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
    <title>rating & Ulasan</title>
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
        <h2>Rating & Ulasan</h2>
        <p>Lihat penilaian dan ulasan yang diberikan pelanggan terhadap layanan Anda.</p>
    </div>

    <!-- Rating Summary -->

    <div class="rating-summary">

        <div class="rating-score">

            <h1>4.9</h1>

            <div class="stars">
                ★★★★★
            </div>

            <p>124 Ulasan Pelanggan</p>

        </div>

        <div class="rating-detail">

            <div class="rating-row">
                <span>5 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:90%"></div>
                </div>
                <span>90%</span>
            </div>

            <div class="rating-row">
                <span>4 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:7%"></div>
                </div>
                <span>7%</span>
            </div>

            <div class="rating-row">
                <span>3 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:2%"></div>
                </div>
                <span>2%</span>
            </div>

            <div class="rating-row">
                <span>2 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:1%"></div>
                </div>
                <span>1%</span>
            </div>

            <div class="rating-row">
                <span>1 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:0%"></div>
                </div>
                <span>0%</span>
            </div>

        </div>

    </div>

    <!-- Review List -->

    <div class="review-container">

        <div class="review-card">

            <div class="review-header">

                <div class="profile">
                    <img src="https://i.pravatar.cc/80?img=12">

                    <div>
                        <h4>Siti Sarifatul Badriyah</h4>
                        <span>Wedding Photography</span>
                    </div>
                </div>

                <div class="review-date">
                    12 Juni 2026
                </div>

            </div>

            <div class="review-stars">
                ★★★★★
            </div>

            <p class="review-text">
                Hasil foto sangat memuaskan, fotografer ramah dan profesional.
                Pengambilan gambar tepat waktu serta hasil editing sangat bagus.
            </p>

        </div>

        <div class="review-card">

            <div class="review-header">

                <div class="profile">
                    <img src="https://i.pravatar.cc/80?img=25">

                    <div>
                        <h4>Ahmad Fauzi</h4>
                        <span>Prewedding Photography</span>
                    </div>
                </div>

                <div class="review-date">
                    10 Juni 2026
                </div>

            </div>

            <div class="review-stars">
                ★★★★★
            </div>

            <p class="review-text">
                Sangat recommended. Pelayanan cepat, hasil foto berkualitas,
                dan komunikasi sangat baik dari awal hingga akhir acara.
            </p>

        </div>

        <div class="review-card">

            <div class="review-header">

                <div class="profile">
                    <img src="https://i.pravatar.cc/80?img=36">

                    <div>
                        <h4>Deswita Fazawia</h4>
                        <span>Wisuda Photography</span>
                    </div>
                </div>

                <div class="review-date">
                    08 Juni 2026
                </div>

            </div>

            <div class="review-stars">
                ★★★★☆
            </div>

            <p class="review-text">
                Hasil foto bagus dan sesuai harapan. Pengiriman hasil cukup cepat.
                Semoga semakin sukses.
            </p>

        </div>

    </div>

</div>
</body>
</html>