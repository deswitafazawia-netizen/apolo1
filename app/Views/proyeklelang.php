<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Lelang</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
    </div>

        <div class="right">
            <div class="notif-icon">
                <i class="fa-solid fa-message"></i>
                <span class="notif-badge">1</span>
            </div>

            <img src="<?= base_url('assets/orang.jpeg') ?>" alt="user" class="user">
        </div>
</div>
<div class="container">
    <div class="sidebar">
            <ul>
        <li><a href="<?= base_url('dashboardphotografer') ?>">History</a></li>
        <li><a href="<?= base_url('pesananjasa') ?>">Pesanan Jasa</a></li>
        <li><a href="<?= base_url('proyeklelang') ?>">Proyek Lelang</a></li>
        <li><a href="<?= base_url('') ?>">Status Pembayaran</a></li>
</ul>
    </div>


<div class="main-feed">

    <div class="announcement-card">

        <div class="card-header">
            <img src="<?= base_url('assets/orang.jpeg') ?>" class="card-logo">
            
            <div class="card-title">
                <h4>Proyek Lelang</h4>
                <p>
                    <strong>Kirania Wedding</strong> • 6 days ago
                </p>
            </div>

            <div class="card-menu">⋯</div>
        </div>

        <div class="card-content">
            <h3>Introducing BIMI (Brand Indicators for Message Identification)</h3>

            <p>
                <strong>BIMI</strong> adalah fitur email yang menampilkan logo resmi langsung di inbox Anda.
                Ini membantu meningkatkan kepercayaan dan keamanan pengguna.
            </p>

            <p>
                Dengan BIMI, Anda dapat mengenali email resmi dengan cepat serta meningkatkan pengalaman pengguna.
            </p>
        </div>

    </div>

</div>

</div>

</body>
</html>