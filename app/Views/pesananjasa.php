<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan jasa</title>
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
    <div class="content">
         <div class="main-feed">
        <div class="card">
            <div class="order-header">Dispatched</div>

            <div class="order-item">
                <img src="<?= base_url('assets/orang.jpeg') ?>">
                <div>
                    <h4>Wedding Shoot</h4>
                    <p>Besok • 07:00 - 17:00</p>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</div>

</body>
</html>