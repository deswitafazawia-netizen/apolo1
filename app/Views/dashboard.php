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
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <nav class="navbar-container">
            <div class="nav-logo">
                <img src="<?= base_url('assets/logo.png')?>" alt="">
            </div>
            <aside class="nav-menu">
                <li><a href="">Dashboard</a></li>
                <li><a href="">Proyek Lelang</a></li>
                <li><a href="">Discover</a></li>
                <li><a href="">Bookkings</a></li>
                <li><a href="">Pembayaran</a></li>
                <li><a href="">PhotoGrafer</a></li>
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
            <?= $this->renderSection('content') ?>
        </main>
    </div>
</body>
</html>