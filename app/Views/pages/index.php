<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="dashboard">
        <div class="background">
            <div></div>
            <img src="<?= base_url('assets/bg.jpeg')?>" alt="">
        </div>
        <div class="item">
            <div class="deskripsi">
            <h1>Apolo Community</h1>
            <p> Apolo Community adalah platform layanan fotografi yang mempertemukan
                pelanggan dengan photografer profesional dalam satu sistem terintegrasi.
                Pengguna dapat menjelajahi portofolio, memilih jenis layanan fotografi,
                melakukan pemesanan, serta melakukan pembayaran secara online dengan
                mudah dan aman.
            </p>
            <p> Didukung fitur proyek lelang, pelanggan dapat mempublikasikan kebutuhan
                fotografi dan menerima penawaran dari berbagai photografer. Sistem ini
                dirancang untuk menciptakan proses pemesanan yang lebih transparan,
                efisien, dan memberikan pengalaman terbaik bagi pelanggan maupun
                photografer.
            </p>
                <span></span>
            </div>
            <div class="item-total">
                <hr>
                <div>
                    <p>EQUIPMENT</p>
                    <span>Ph  ase One</span>
                </div>
                <hr>
            </div>
        </div>
        <div class="item-foto">
            <p class="item-p">GALERY</p>
            <h1>Apolo Comunity</h1>
            <div class="foto-comonitas">
                <img src="<?= base_url('assets/bg1.jpeg')?>" alt="">
                <img src="<?= base_url('assets/bg2.jpeg')?>" alt="">
                <img src="<?= base_url('assets/bg3.jpeg')?>" alt="">
                <img src="<?= base_url('assets/bg4.jpeg')?>" alt="">
                <img src="<?= base_url('assets/bg5.jpeg')?>" alt="">
            </div>
        </div>
<section class="testimonials">
    <div class="rating">
        <p class="rating-p">TESTIMONIALS</p>
        <h1>Client Stories</h1>
    </div>

    <div class="testimonial-container">

        <div class="testimonial-card">
            <div class="testimonial-header">
                <div class="profile">
                    <div class="avatar">EM</div>
                    <div>
                        <h3>Elena Moretti</h3>
                        <span>Creative Director, LUXE Magazine</span>
                    </div>
                </div>

                <div class="stars">
                    ★★★★★
                </div>
            </div>

            <p class="testimonial-text">
                “Julian's eye for detail is unparalleled. He didn't just take photos; he captured the soul of our brand narrative. The minimal aesthetic he brings is exactly what modern luxury demands.”
            </p>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-header">
                <div class="profile">
                    <div class="avatar">DA</div>
                    <div>
                        <h3>David Arlow</h3>
                        <span>Architect, Arlow & Partners</span>
                    </div>
                </div>

                <div class="stars">
                    ★★★★★
                </div>
            </div>

            <p class="testimonial-text">
                “In architectural photography, precision is everything. Julian understands lines, shadows, and materials like nobody else. Professional, punctual, and highly skilled.”
            </p>
        </div>
        <footer class="dp-footer reveal">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo" class="footer-logo">
                    <p>Apolo Community — Platform jasa fotografi profesional yang menghubungkan pelanggan dengan fotografer terpercaya.</p>
                </div>
                <div>
                    <h4 class="footer-col-title">Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="#">Bisnis Anda</a></li>
                        <li><a href="#">Pasangan</a></li>
                        <li><a href="#">Keluarga</a></li>
                        <li><a href="#">Teman & Sahabat</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-col-title">Kategori</h4>
                    <ul class="footer-links">
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Pre-Wedding</a></li>
                        <li><a href="#">Wisuda</a></li>
                        <li><a href="#">Sekolah</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-col-title">Info</h4>
                    <ul class="footer-links">
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom-bar">
                <span class="footer-copyright">© 2027 Komunitas Apolo. All rights reserved.</span>
            </div>
        </footer>

    </div>
</section>
    </div>
<?= $this->endSection() ?>