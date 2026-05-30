<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login ke Apolo Community - Platform jasa fotografi profesional">
    <title>Login — Apolo Community</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
</head>
<body>

    <!-- Animated Background Orbs -->
    <div class="bg-orbs">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="orb orb-4"></div>
    </div>

    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <div class="auth-wrapper">
        <!-- Left Panel - Branding -->
        <div class="auth-branding">
            <div class="brand-content">
                <div class="brand-logo">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo Community Logo">
                </div>
                <h1 class="brand-title">Apolo Community</h1>
                <p class="brand-tagline">Platform jasa fotografi profesional untuk momen berharga Anda</p>
                <div class="brand-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                                <circle cx="12" cy="13" r="4"/>
                            </svg>
                        </div>
                        <span>Fotografer Profesional</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <span>Transaksi Aman</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </div>
                        <span>Hasil Berkualitas</span>
                    </div>
                </div>
            </div>
            <div class="brand-decoration">
                <div class="deco-ring ring-1"></div>
                <div class="deco-ring ring-2"></div>
                <div class="deco-ring ring-3"></div>
            </div>
        </div>

        <!-- Right Panel - Login Form -->
        <div class="auth-form-panel">
            <div class="auth-form-container">
                <!-- Mobile Logo -->
                <div class="mobile-logo">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo Community Logo">
                </div>

                <div class="form-header">
                    <h2>Selamat Datang! 👋</h2>
                    <p>Masuk ke akun Anda untuk melanjutkan</p>
                </div>

                <form id="loginForm" autocomplete="off">
                    <div class="form-group">
                        <label for="username">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            Username
                        </label>
                        <div class="input-wrapper">
                            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nohp">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                                <line x1="12" y1="18" x2="12.01" y2="18"/>
                            </svg>
                            No. HP
                        </label>
                        <div class="input-wrapper">
                            <input type="tel" id="nohp" name="nohp" placeholder="Masukkan No. HP" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            Password
                        </label>
                        <div class="input-wrapper password-wrapper">
                            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                            <button type="button" class="toggle-password" id="togglePassword" aria-label="Toggle password visibility">
                                <svg class="eye-open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                <svg class="eye-closed" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
                                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/>
                                    <line x1="1" y1="1" x2="23" y2="23"/>
                                </svg>
                            </button>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn-auth" id="btnLogin">
                        <span class="btn-text">Masuk</span>
                        <span class="btn-loader" style="display:none;">
                            <svg width="24" height="24" viewBox="0 0 24 24" class="spinner">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="31.4 31.4" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <svg class="btn-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </button>
                </form>

                <div class="auth-divider">
                    <span>atau</span>
                </div>

                <div class="auth-footer">
                    <p>Belum punya akun? <a href="<?= base_url('register') ?>" class="auth-link">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            const eyeOpen = togglePassword.querySelector('.eye-open');
            const eyeClosed = togglePassword.querySelector('.eye-closed');
            
            if (type === 'text') {
                eyeOpen.style.display = 'none';
                eyeClosed.style.display = 'block';
            } else {
                eyeOpen.style.display = 'block';
                eyeClosed.style.display = 'none';
            }
        });

        // Floating label animation
        document.querySelectorAll('.input-wrapper input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('focused');
            });
            input.addEventListener('blur', () => {
                if (!input.value) {
                    input.parentElement.classList.remove('focused');
                }
            });
        });

        // Button loading animation
        const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', (e) => {
            const btn = document.getElementById('btnLogin');
            const btnText = btn.querySelector('.btn-text');
            const btnLoader = btn.querySelector('.btn-loader');
            const btnArrow = btn.querySelector('.btn-arrow');
            
            btnText.textContent = 'Memproses...';
            btnLoader.style.display = 'inline-flex';
            btnArrow.style.display = 'none';
            btn.classList.add('loading');
        });

        // Create floating particles
        function createParticles() {
            const container = document.getElementById('particles');
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 4 + 2 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDuration = Math.random() * 15 + 10 + 's';
                particle.style.animationDelay = Math.random() * 5 + 's';
                particle.style.opacity = Math.random() * 0.5 + 0.1;
                container.appendChild(particle);
            }
        }
        createParticles();
    </script>

</body>
</html>