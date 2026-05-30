<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apolo Community - Temukan fotografer profesional terbaik untuk momen berharga Anda">
    <title>Dashboard — Apolo Community</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('css/dashboardpelanggan.css') ?>">
</head>
<body>

    <!-- Ambient Background -->
    <div class="ambient-bg">
        <div class="ambient-orb"></div>
        <div class="ambient-orb"></div>
        <div class="ambient-orb"></div>
    </div>

    <!-- Navbar -->
    <nav class="dp-navbar">
        <a href="<?= base_url('dashboardpelanggan') ?>" class="nav-logo">
            <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo Community">
        </a>

        <div class="nav-center">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" placeholder="Cari fotografer, lokasi, atau gaya foto..." id="searchInput">
        </div>

        <div class="nav-right">
            <button class="nav-icon-btn" title="Pesan">
                <i class="fa-solid fa-message"></i>
                <span class="nav-badge">1</span>
            </button>
            <button class="nav-icon-btn" title="Notifikasi">
                <i class="fa-solid fa-bell"></i>
            </button>
            <img src="<?= base_url('assets/orang.jpeg') ?>" alt="Profil" class="nav-avatar">
        </div>
    </nav>

    <!-- Main Content -->
    <main class="dp-main">

        <!-- Hero Section -->
        <section class="dp-hero reveal">
            <div class="hero-content">
                <div class="hero-greeting">
                    <span class="lens-icon"></span>
                    Selamat Datang di Apolo
                </div>
                <h1 class="hero-title">Abadikan Momen<br>Berharga Anda</h1>
                <p class="hero-subtitle">Temukan fotografer profesional yang siap mengabadikan setiap momen spesial dengan sentuhan artistik terbaik.</p>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-value">50+</div>
                        <div class="hero-stat-label">Fotografer</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">1.2K</div>
                        <div class="hero-stat-label">Proyek Selesai</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">4.9</div>
                        <div class="hero-stat-label">Rating</div>
                    </div>
                </div>
            </div>

            <!-- Aperture Decoration -->
            <div class="hero-aperture">
                <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="95" stroke="currentColor" stroke-width="1" opacity="0.3"/>
                    <circle cx="100" cy="100" r="70" stroke="currentColor" stroke-width="1" opacity="0.2"/>
                    <circle cx="100" cy="100" r="45" stroke="currentColor" stroke-width="1.5" opacity="0.4"/>
                    <circle cx="100" cy="100" r="20" stroke="currentColor" stroke-width="2" opacity="0.5"/>
                    <line x1="100" y1="5" x2="100" y2="30" stroke="currentColor" stroke-width="1" opacity="0.3"/>
                    <line x1="100" y1="170" x2="100" y2="195" stroke="currentColor" stroke-width="1" opacity="0.3"/>
                    <line x1="5" y1="100" x2="30" y2="100" stroke="currentColor" stroke-width="1" opacity="0.3"/>
                    <line x1="170" y1="100" x2="195" y2="100" stroke="currentColor" stroke-width="1" opacity="0.3"/>
                    <!-- Aperture blades hint -->
                    <polygon points="100,30 130,60 130,100 100,130 70,100 70,60" stroke="currentColor" stroke-width="1" fill="none" opacity="0.15"/>
                </svg>
            </div>
        </section>

        <!-- Upload Bar -->
        <div class="dp-upload-bar reveal">
            <img src="<?= base_url('assets/orang.jpeg') ?>" alt="Profil" class="upload-avatar">
            <input type="text" placeholder="Upload proyek lelang Anda...">
            <button class="upload-photo-btn">
                <i class="fa-solid fa-image"></i>
                <span>Foto</span>
            </button>
        </div>

        <!-- Photographer Section -->
        <section class="reveal">
            <div class="section-header">
                <div>
                    <h2 class="section-title">Fotografer Pilihan</h2>
                    <p class="section-subtitle">Temukan fotografer sesuai kebutuhan Anda</p>
                </div>
                <div class="dp-categories">
                    <button class="cat-pill active">Semua</button>
                    <button class="cat-pill">Wedding</button>
                    <button class="cat-pill">Pre-Wedding</button>
                    <button class="cat-pill">Wisuda</button>
                    <button class="cat-pill">Bisnis</button>
                </div>
            </div>

            <!-- Photographer Grid -->
            <div class="dp-grid">

                <!-- Card 1 - Ichall -->
                <div class="pg-card reveal">
                    <div class="pg-card-img">
                        <img src="<?= base_url('assets/profilichall.png') ?>" alt="Ichall Photograph">
                        <div class="pg-card-overlay"></div>
                        <div class="pg-camera-badge">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                    <div class="pg-card-body">
                        <h3 class="pg-card-name">Ichall Photograph</h3>
                        <span class="pg-card-specialty">Wedding & Pre-Wedding Specialist</span>
                        <a href="<?= base_url('ichall') ?>" class="pg-card-btn">
                            Lihat Portofolio
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2 - Jack Picture -->
                <div class="pg-card reveal">
                    <div class="pg-card-img">
                        <img src="<?= base_url('assets/jackwedding1.webp') ?>" alt="Jack Picture">
                        <div class="pg-card-overlay"></div>
                        <div class="pg-camera-badge">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                    <div class="pg-card-body">
                        <h3 class="pg-card-name">Jack Picture</h3>
                        <span class="pg-card-specialty">Wedding & Engagement</span>
                        <a href="<?= base_url('jackpicture') ?>" class="pg-card-btn">
                            Lihat Portofolio
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 3 - Muhtadi -->
                <div class="pg-card reveal">
                    <div class="pg-card-img">
                        <img src="<?= base_url('assets/muhtadiwedding1.webp') ?>" alt="Muhtadi">
                        <div class="pg-card-overlay"></div>
                        <div class="pg-camera-badge">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                    <div class="pg-card-body">
                        <h3 class="pg-card-name">Muhtadi Studio</h3>
                        <span class="pg-card-specialty">Akad & Wedding Photography</span>
                        <a href="<?= base_url('muhtadi') ?>" class="pg-card-btn">
                            Lihat Portofolio
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 4 - Zul Studio -->
                <div class="pg-card reveal">
                    <div class="pg-card-img">
                        <img src="<?= base_url('assets/zulwedding.jpg') ?>" alt="Zul Studio">
                        <div class="pg-card-overlay"></div>
                        <div class="pg-camera-badge">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                    <div class="pg-card-body">
                        <h3 class="pg-card-name">Zul Studio</h3>
                        <span class="pg-card-specialty">Wedding & Pre-Wedding</span>
                        <a href="<?= base_url('zulstudio') ?>" class="pg-card-btn">
                            Lihat Portofolio
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->
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
                <div class="footer-socials">
                    <button class="footer-social-btn"><i class="fa-brands fa-instagram"></i></button>
                    <button class="footer-social-btn"><i class="fa-brands fa-whatsapp"></i></button>
                    <button class="footer-social-btn"><i class="fa-brands fa-tiktok"></i></button>
                </div>
            </div>
        </footer>

    </main>

    <script>
    // Scroll Reveal Animation
    const revealEls = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), i * 80);
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    revealEls.forEach(el => revealObserver.observe(el));

    // Category pill toggle
    document.querySelectorAll('.cat-pill').forEach(pill => {
        pill.addEventListener('click', () => {
            document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
        });
    });

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.pg-card').forEach(card => {
                const name = card.querySelector('.pg-card-name').textContent.toLowerCase();
                const specialty = card.querySelector('.pg-card-specialty').textContent.toLowerCase();
                card.style.display = (name.includes(query) || specialty.includes(query)) ? '' : 'none';
            });
        });
    }
    </script>

</body>
</html>