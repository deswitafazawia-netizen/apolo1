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
    <title>Booking</title>
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
<section class="booking-header">
    <h1>BOOK PHOTOGRAPHER</h1>
    <p>
        Lengkapi informasi pemesanan untuk melakukan booking
        photographer pilihan Anda.
    </p>
</section>

<div class="booking-container">

    <div class="booking-form">

        <h2>Informasi Pemesanan</h2>

        <form action="" method="post">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama lengkap">
            </div>

            <div class="form-group">
                <label>Nomor WhatsApp</label>
                <input type="text" placeholder="08xxxxxxxxxx">
            </div>

            <div class="form-group">
                <label>Jenis Photography</label>
                <select>
                    <option>Wedding</option>
                    <option>Prewedding</option>
                    <option>Wisuda</option>
                    <option>Event</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Acara</label>
                <input type="date">
            </div>

            <div class="form-group">
                <label>Lokasi Acara</label>
                <input type="text" placeholder="Masukkan lokasi acara">
            </div>

            <div class="form-group">
                <label>Durasi Pemotretan</label>
                <select>
                    <option>2 Jam</option>
                    <option>4 Jam</option>
                    <option>6 Jam</option>
                    <option>Full Day</option>
                </select>
            </div>

            <div class="form-group">
                <label>Catatan Tambahan</label>
                <textarea placeholder="Tambahkan informasi tambahan"></textarea>
            </div>

            <button type="submit" class="btn-book-now">
                Konfirmasi Booking
            </button>

        </form>

    </div>

    <div class="booking-summary">

        <div class="photographer-card">

            <img src="<?= base_url('assets/profilichall.png') ?>" alt="">

            <h3>Ichall Photograph</h3>

            <p>
                Professional Wedding & Portrait Photographer
            </p>

            <div class="rating">
                ⭐ 4.9 Rating
            </div>

        </div>

        <div class="price-card">

            <h3>Ringkasan Paket</h3>

            <div class="price-row">
                <span>Paket Wedding</span>
                <strong>Rp 3.500.000</strong>
            </div>

            <div class="price-row">
                <span>Biaya Platform</span>
                <strong>Rp 50.000</strong>
            </div>

            <hr>

            <div class="price-row total">
                <span>Total</span>
                <strong>Rp 3.550.000</strong>
            </div>

        </div>

    </div>

</div>
</main>
</body>
</html>