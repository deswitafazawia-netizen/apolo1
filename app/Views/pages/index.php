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
            <p> Apolo Community adalah platform layanan photography yang mempertemukan
                pelanggan dengan photografer dalam satu sistem terintegrasi.
                Pengguna dapat menjelajahi portofolio, memilih jenis layanan photography,
                melakukan pemesanan, serta melakukan pembayaran secara online dengan
                mudah dan aman.
            </p>
            <p> Didukung fitur proyek lelang, pelanggan dapat mempublikasikan kebutuhan
                photography dan menerima penawaran dari berbagai photografer. Sistem ini
                dirancang untuk menciptakan proses pemesanan yang lebih transparan,
                efisien, dan memberikan pengalaman terbaik bagi pelanggan maupun
                photografer.
            </p>
                <span></span>
            </div>
            <div class="item-total">
                <hr>
                <div>
                    <p></p>
                    <span></span>
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

        <footer class="dp-footer reveal">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo" class="footer-logo">
                    <p>Apolo Community — Platform jasa photography profesional yang 
                        menghubungkan pelanggan dengan fotografer terpercaya.</p>
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
<?= $this->endSection() ?>