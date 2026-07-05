<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="portfolio-header">
    <div class="portfolio-profile">

        <img src="<?= base_url('assets/profilichall.png') ?>" alt="">

        <div class="profile-info">

            <span>PHOTOGRAPHER PROFILE</span>

            <h1><?= esc($photografer['nama_photografer']) ?></h1>

            <p>
                Photographer profesional yang berfokus pada dokumentasi
                pernikahan, wisuda, prewedding, event dan portrait dengan
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
                <a href="<?= base_url('dashboard/chat/'.$photografer['id_photografer']) ?>"
                class="btn-contact">
                    <i class="fa-solid fa-comments"></i>
                    Hubungi
                </a>
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

        <?php foreach($jenis as $j): ?>

        <div class="gallery-item">

            <img src="<?= base_url('assets/'.$j['foto']) ?>" alt="">

            <div class="overlay">

                <h3><?= esc($j['nama_jenis']) ?></h3>

                <p><?= esc($j['deskripsi']) ?></p>

               <h4>
                    Rp <?= number_format($j['harga'], 0, ',', '.') ?>
                </h4>

                <a href="<?= base_url('dashboard/booking/'.$photografer['id_photografer'].'/'.$j['id_jenis_photography']) ?>"
                class="btn-booking">
                    <i class="fa-solid fa-calendar-check"></i>
                    Booking Sekarang
                </a>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

<?= $this->endSection() ?>