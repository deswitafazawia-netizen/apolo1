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
    <title>Document</title>
</head>
<body>
        <div class="container">
        <nav class="navbar-container">
            <div class="nav-logo">
                <img src="<?= base_url('assets/logo.png')?>" alt="">
            </div>
            <aside class="nav-menu">
                <li><a href="">Dashboard</a></li>
                <li><a href="">Photografer</a></li>
                <li><a href="">Proyek lelang</a></li>
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

    <div class="photographer-wrapper">

        <!-- SIDEBAR FILTER -->
        <div class="filter-sidebar">

            <h2>Filters</h2>

            <div class="filter-group">
                <h4>CATEGORY</h4>

                <label>
                    <input type="checkbox">
                    Wedding
                </label>

                <label>
                    <input type="checkbox">
                    Portrait
                </label>

                <label>
                    <input type="checkbox">
                    Event
                </label>

                <label>
                    <input type="checkbox">
                    Prewedding
                </label>

                <label>
                    <input type="checkbox">
                    Wisuda
                </label>
            </div>

            <div class="filter-group">
                <h4>PRICE RANGE</h4>

                <div class="price-range">
                    <span>Rp100.000</span>
                    <span>Rp5.000.000+</span>
                </div>

                <input type="range">
            </div>

            <div class="filter-group">
                <h4>MINIMUM RATING</h4>

                <div class="rating-filter">
                    ⭐⭐⭐⭐⭐
                </div>
            </div>

            <button class="btn-clear">
                CLEAR ALL
            </button>

        </div>

        <!-- CONTENT -->
        <div class="photographer-content">

            <div class="content-header">
                <div>
                    <h1>The Collective</h1>
                    <p>Temukan photografer profesional terbaik sesuai kebutuhan Anda.</p>
                </div>

                <div class="sort-box">
                    <span>SORT BY :</span>
                    <select>
                        <option>Most Acclaimed</option>
                        <option>Highest Rating</option>
                        <option>Lowest Price</option>
                    </select>
                </div>
            </div>


        <div class="photographer-grid">
            <div class="photographer-card">
                <div class="card-image">
                    <img src="<?= base_url('assets/profilichall.png') ?>" alt="">
                </div>

                <div class="card-body">
                    <div class="card-title">
                        <h3>Ichall Photograph</h3>
                        <span>⭐ 4.9</span>
                    </div>

                    <p>
                        Spesialis fotografi pernikahan dan prewedding dengan gaya
                        dokumenter yang elegan dan natural.
                    </p>

                    <div class="price-box">
                        <span>MULAI DARI</span>
                        <h4>Rp 1.200.000</h4>
                    </div>

                    <div class="card-buttons">
                        <a href="#" class="btn-book">BOOK NOW</a>
                        <a href="#" class="btn-portfolio">VIEW PORTFOLIO</a>
                    </div>
                </div>
            </div>

            <div class="photographer-card">
                <div class="card-image">
                    <span class="category-tag">PORTRAIT</span>
                    <img src="<?= base_url('assets/profiljack.jpeg') ?>" alt="">
                </div>

                <div class="card-body">
                    <div class="card-title">
                        <h3>Kirania Studio</h3>
                        <span>⭐ 5.0</span>
                    </div>

                    <p>
                        Ahli portrait photography dengan hasil foto modern,
                        clean dan estetik.
                    </p>

                    <div class="price-box">
                        <span>MULAI DARI</span>
                        <h4>Rp 850.000</h4>
                    </div>

                    <div class="card-buttons">
                        <a href="#" class="btn-book">BOOK NOW</a>
                        <a href="#" class="btn-portfolio">VIEW PORTFOLIO</a>
                    </div>
                </div>
            </div>

            <div class="photographer-card">
                <div class="card-image">
                    <span class="category-tag">EVENT</span>
                    <img src="<?= base_url('assets/profilsadali.jpeg') ?>" alt="">
                </div>

                <div class="card-body">
                    <div class="card-title">
                        <h3>Apolo Creative</h3>
                        <span>⭐ 4.8</span>
                    </div>

                    <p>
                        Dokumentasi seminar, gathering, wisuda dan event
                        profesional lainnya.
                    </p>

                    <div class="price-box">
                        <span>MULAI DARI</span>
                        <h4>Rp 2.000.000</h4>
                    </div>

                    <div class="card-buttons">
                        <a href="#" class="btn-book">BOOK NOW</a>
                        <a href="#" class="btn-portfolio">VIEW PORTFOLIO</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>

</main>
        
</body>
</html>