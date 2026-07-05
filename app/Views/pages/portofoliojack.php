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
    <title>Portofolio Jack</title>
</head>
<body>
        <div class="container">
        <nav class="navbar-container">
            <div class="nav-user">
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
                <li><a href="">Booking</a></li>
                <li><a href="">Status Pembayaran</a></li>
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
<main class="main-content">
<div class="portfolio-header">
    <div class="portfolio-profile">
        <img src="<?= base_url('assets/profiljack.jpeg') ?>" alt="">

        <div class="profile-info">
            <span>PHOTOGRAPHER PROFILE</span>
            <h1>Jack Picture</h1>

            <p>
                Photographer yang berfokus pada pernikahan, wisuda, 
                prewedding, event dan portrait dengan
                gaya visual yang elegan, natural dan berkesan.
            </p>

            <div class="profile-stats">
                <div>
                    <h3>150+</h3>
                    <p>Project</p>
                </div>

                <div>
                    <h3>4.9</h3>
                    <p>Rating</p>
                </div>

                <div>
                    <h3>5 Tahun</h3>
                    <p>Experience</p>
                </div>
            </div>

            <div class="profile-buttons">
                <a href="<?= base_url('booking') ?>" class="btn-booking">
                 Book Now
                </a>
                <a href="#" class="btn-contact">Hubungi</a>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-category">
    <button class="active">Semua</button>
    <button>Wedding</button>
    <button>Prewedding</button>
    <button>Wisuda</button>
    <button>Event</button>
</div>

<div class="portfolio-gallery">

    <div class="gallery-item">
        <img src="<?= base_url('assets/jackakad.jpg') ?>" alt="">
        <div class="overlay">
            <h3>Paket Akad</h3>
            <p>....</p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?= base_url('assets/jackprewedding.webp') ?>" alt="">
        <div class="overlay">
            <h3>Prewedding</h3>
            <p>Golden Hour Portrait</p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?= base_url('assets/jacktunangan.webp') ?>" alt="">
        <div class="overlay">
            <h3>Angegament</h3>
            <p>......</p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?= base_url('assets/jackwedding1.webp') ?>" alt="">
        <div class="overlay">
            <h3>Paket wedding 1</h3>
            <p>Elegant Wedding Moment</p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?= base_url('assets/jackwedding2.webp') ?>" alt="">
        <div class="overlay">
            <h3>Paket wedding 2</h3>
            <p>Elegant Wedding Moment</p>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?= base_url('assets/jackwisuda.webp') ?>" alt="">
        <div class="overlay">
            <h3>Graduation</h3>
            <p>Graduation Session</p>
        </div>
    </div>

</div>

</main>

</body>
</html>