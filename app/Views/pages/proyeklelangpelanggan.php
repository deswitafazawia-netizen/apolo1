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
<main class="main-content">

<div class="container">

    <div class="upload-project">
        <h2>Upload Proyek Lelang</h2>

        <form>
            <input type="text" placeholder="Judul Proyek">
            <select>
                <option>Pilih Jenis Photography</option>
                <option>Wedding</option>
                <option>Prewedding</option>
                <option>Wisuda</option>
                <option>Event</option>
            </select>
            <input type="text" placeholder="Lokasi">
            <input type="date">
            <input type="number" placeholder="Budget">
            <label>Deadline Penawaran</label>
            <input type="date">
            <textarea placeholder="Deskripsi Proyek"></textarea>
            <input type="file">
            <button type="submit">
                Publish Project
            </button>
        </form>
    </div>

    <div class="published-project">
        <h2>Proyek Terpublish</h2>

        <div class="project-card">
            <h3>Wedding Outdoor Surabaya</h3>

            <p>📍 Surabaya</p>
            <p>📷 Wedding Photography</p>
            <p>💰 Budget: Rp5.000.000</p>
            <p>⏳ Deadline: 20 Juni 2026</p>

            <span class="status active">Aktif</span>

            <div class="proposal-info">
                8 Penawaran Masuk
            </div>

            <button>Lihat Detail</button>
            <button>Lihat Penawaran</button>
            <button>Tutup Lelang</button>
        </div>
    </div>
</div>
</main>
</body>
</html>