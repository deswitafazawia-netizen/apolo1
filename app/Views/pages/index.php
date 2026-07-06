<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="dashboard">

        <section class="hero">
            <div class="hero-bg">
                <img src="<?= base_url('assets/bg.jpeg')?>" alt="">
            </div>
            <div class="hero-content">
                <span class="hero-badge">Komunitas Photography</span>
                <h1>Apolo Community</h1>
                <p>Platform layanan photography yang mempertemukan pelanggan dengan photografer dalam satu sistem terintegrasi.</p>
                <div class="hero-actions">
                    <a href="<?= base_url('dashboard/photografer') ?>" class="btn-hero-primary">Jelajahi Photografer</a>
                    <a href="<?= base_url('dashboard/proyeklelang') ?>" class="btn-hero-secondary">Lihat Proyek Lelang</a>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="about-container">
                <div class="about-text">
                    <span class="section-tag">Tentang Kami</span>
                    <h2>Platform Photography <br>Terpercaya</h2>
                    <p>Apolo Community adalah platform layanan photography yang mempertemukan pelanggan dengan photografer dalam satu sistem terintegrasi. Pengguna dapat menjelajahi portofolio, memilih jenis layanan photography, melakukan pemesanan, serta melakukan pembayaran secara online dengan mudah dan aman.</p>
                    <p>Didukung fitur proyek lelang, pelanggan dapat mempublikasikan kebutuhan photography dan menerima penawaran dari berbagai photografer. Sistem ini dirancang untuk menciptakan proses pemesanan yang lebih transparan, efisien, dan memberikan pengalaman terbaik bagi pelanggan maupun photografer.</p>
                </div>
                <div class="about-stats">
                    <div class="about-stat">
                        <h3><?= $total_photografer ?>+</h3>
                        <span>Photografer</span>
                    </div>
                    <div class="about-stat">
                        <h3><?= $proyek_selesai ?>+</h3>
                        <span>Proyek Selesai</span>
                    </div>
                    <div class="about-stat">
                        <h3><?= $avg_rating ?></h3>
                        <span>Rating Rata-rata</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-section">
            <div class="gallery-header">
                <span class="section-tag">Gallery</span>
                <h2>Karya Terbaik</h2>
            </div>
            <div class="foto-frame">
                <div class="foto-comonitas">
                    <img src="<?= base_url('assets/bg1.jpeg')?>" alt="">
                    <img src="<?= base_url('assets/bg2.jpeg')?>" alt="">
                    <img src="<?= base_url('assets/bg3.jpeg')?>" alt="">
                    <img src="<?= base_url('assets/bg4.jpeg')?>" alt="">
                    <img src="<?= base_url('assets/bg5.jpeg')?>" alt="">
                </div>
            </div>
        </section>

        <footer class="site-footer">
            <div class="footer-inner">
                <div class="footer-brand">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo" class="footer-logo">
                    <p>Apolo Community — Platform jasa photography profesional yang menghubungkan pelanggan dengan fotografer terpercaya.</p>
                </div>
                <div class="footer-links-group">
                    <div>
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="#">Bisnis Anda</a></li>
                            <li><a href="#">Pasangan</a></li>
                            <li><a href="#">Keluarga</a></li>
                            <li><a href="#">Teman & Sahabat</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Kategori</h4>
                        <ul>
                            <li><a href="#">Wedding</a></li>
                            <li><a href="#">Pre-Wedding</a></li>
                            <li><a href="#">Wisuda</a></li>
                            <li><a href="#">Sekolah</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Info</h4>
                        <ul>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2027 Komunitas Apolo. All rights reserved.</span>
            </div>
        </footer>

    </div>
<?= $this->endSection() ?>