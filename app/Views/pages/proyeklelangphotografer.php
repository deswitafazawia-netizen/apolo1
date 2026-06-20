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
    <title>Proyek lelang Photografer</title>
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
<main class="main-content">
    <div class="auction-header">
        <div>
            <span class="section-label">OPEN PROJECTS</span>
            <h1>The Marketplace</h1>
            <p>
                Jelajahi proyek fotografi yang sedang mencari photographer profesional.
            </p>
        </div>

        <div class="sort-box">
            <span>SORT BY :</span>
            <select>
                <option>Latest Project</option>
                <option>Highest Budget</option>
                <option>Nearest Event</option>
            </select>
        </div>
    </div>

    <div class="auction-grid">

        <!-- CARD PROJECT -->
        <div class="auction-card">

            <div class="auction-card-top">
                <span class="project-tag">WEDDING</span>
                <span class="project-budget">Rp 3.000.000</span>
            </div>

            <h2>Wedding Outdoor Pantai Lombang</h2>

            <div class="project-meta">
                <span><i class="fa-solid fa-location-dot"></i> Sumenep</span>
                <span><i class="fa-solid fa-calendar"></i> 15 Agustus 2027</span>
            </div>

            <p>
                Membutuhkan photographer untuk dokumentasi akad,
                resepsi dan sesi keluarga dengan konsep outdoor.
            </p>

            <div class="project-footer">
                <div>
                    <small>PENAWARAN MASUK</small>
                    <h4>5 Photographer</h4>
                </div>

                <a href="#" class="btn-bid">
                    AJUKAN PENAWARAN
                </a>
            </div>

        </div>

        <div class="auction-card">

            <div class="auction-card-top">
                <span class="project-tag">WISUDA</span>
                <span class="project-budget">Rp 1.500.000</span>
            </div>

            <h2>Foto Wisuda Keluarga</h2>

            <div class="project-meta">
                <span><i class="fa-solid fa-location-dot"></i> Pamekasan</span>
                <span><i class="fa-solid fa-calendar"></i> 20 Juli 2027</span>
            </div>

            <p>
                Membutuhkan photographer untuk sesi foto wisuda
                bersama keluarga dan teman.
            </p>

            <div class="project-footer">
                <div>
                    <small>PENAWARAN MASUK</small>
                    <h4>2 Photographer</h4>
                </div>

                <a href="#" class="btn-bid">
                    AJUKAN PENAWARAN
                </a>
            </div>

        </div>

        <div class="auction-card">

            <div class="auction-card-top">
                <span class="project-tag">EVENT</span>
                <span class="project-budget">Rp 2.500.000</span>
            </div>

            <h2>Dokumentasi Seminar Nasional</h2>

            <div class="project-meta">
                <span><i class="fa-solid fa-location-dot"></i> Sumenep</span>
                <span><i class="fa-solid fa-calendar"></i> 30 Juli 2027</span>
            </div>

            <p>
                Dokumentasi kegiatan seminar dan pembuatan foto
                publikasi media sosial kampus.
            </p>

            <div class="project-footer">
                <div>
                    <small>PENAWARAN MASUK</small>
                    <h4>8 Photographer</h4>
                </div>

                <a href="#" class="btn-bid">
                    AJUKAN PENAWARAN
                </a>
            </div>

        </div>

    </div>

</div>
</main> 
</body>
</html>