<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Daftar akun di Apolo Community - Platform jasa fotografi profesional">
    <title>Daftar — Apolo Community</title>
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
                <h1 class="brand-title">Bergabunglah</h1>
                <p class="brand-tagline">Buat akun Anda dan nikmati layanan fotografi terbaik dari para profesional kami</p>
                <div class="brand-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <span>Komunitas Kreatif</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                                <line x1="1" y1="10" x2="23" y2="10"/>
                            </svg>
                        </div>
                        <span>Booking Mudah & Cepat</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        </div>
                        <span>Fotografer Berpengalaman</span>
                    </div>
                </div>
            </div>
            <div class="brand-decoration">
                <div class="deco-ring ring-1"></div>
                <div class="deco-ring ring-2"></div>
                <div class="deco-ring ring-3"></div>
            </div>
        </div>

        <!-- Right Panel - Register Form -->
        <div class="auth-form-panel">
            <div class="auth-form-container">
                <!-- Mobile Logo -->
                <div class="mobile-logo">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Apolo Community Logo">
                </div>

                <div class="form-header">
                    <h2>Buat Akun Baru ✨</h2>
                    <p>Isi data di bawah untuk membuat akun Anda</p>
                </div>

                <form id="registerForm" autocomplete="off">
                    <div class="form-group">
                        <label for="reg-username">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            Username
                        </label>
                        <div class="input-wrapper">
                            <input type="text" id="reg-username" name="username" placeholder="Masukkan username" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="reg-email">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            Email
                        </label>
                        <div class="input-wrapper">
                            <input type="email" id="reg-email" name="email" placeholder="Masukkan email" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="reg-nohp">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                                <line x1="12" y1="18" x2="12.01" y2="18"/>
                            </svg>
                            No. HP
                        </label>
                        <div class="input-wrapper">
                            <input type="tel" id="reg-nohp" name="nohp" placeholder="Masukkan nomor HP" required>
                            <div class="input-focus-line"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="reg-password">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            Password
                        </label>
                        <div class="input-wrapper password-wrapper">
                            <input type="password" id="reg-password" name="password" placeholder="Masukkan password" required>
                            <button type="button" class="toggle-password" data-target="reg-password" aria-label="Toggle password visibility">
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

                    <div class="form-group">
                        <label for="reg-confirm-password">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                            Konfirmasi Password
                        </label>
                        <div class="input-wrapper password-wrapper">
                            <input type="password" id="reg-confirm-password" name="confirm_password" placeholder="Ulangi password" required>
                            <button type="button" class="toggle-password" data-target="reg-confirm-password" aria-label="Toggle confirm password visibility">
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
                        <div class="password-match-indicator" id="passwordMatch" style="display:none;">
                            <span class="match-icon"></span>
                            <span class="match-text"></span>
                        </div>
                    </div>

                    <button type="submit" class="btn-auth" id="btnRegister">
                        <span class="btn-text">Daftar Sekarang</span>
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
                    <p>Sudah punya akun? <a href="<?= base_url('login') ?>" class="auth-link">Masuk Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility (for multiple toggle buttons)
        document.querySelectorAll('.toggle-password').forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                const eyeOpen = btn.querySelector('.eye-open');
                const eyeClosed = btn.querySelector('.eye-closed');
                
                if (type === 'text') {
                    eyeOpen.style.display = 'none';
                    eyeClosed.style.display = 'block';
                } else {
                    eyeOpen.style.display = 'block';
                    eyeClosed.style.display = 'none';
                }
            });
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

        // Password match indicator
        const password = document.getElementById('reg-password');
        const confirmPassword = document.getElementById('reg-confirm-password');
        const matchIndicator = document.getElementById('passwordMatch');

        function checkPasswordMatch() {
            if (confirmPassword.value.length === 0) {
                matchIndicator.style.display = 'none';
                return;
            }
            matchIndicator.style.display = 'flex';
            const matchIcon = matchIndicator.querySelector('.match-icon');
            const matchText = matchIndicator.querySelector('.match-text');

            if (password.value === confirmPassword.value) {
                matchIndicator.className = 'password-match-indicator match';
                matchIcon.textContent = '✓';
                matchText.textContent = 'Password cocok';
            } else {
                matchIndicator.className = 'password-match-indicator no-match';
                matchIcon.textContent = '✗';
                matchText.textContent = 'Password tidak cocok';
            }
        }

        password.addEventListener('input', checkPasswordMatch);
        confirmPassword.addEventListener('input', checkPasswordMatch);

        // Button loading animation
        const registerForm = document.getElementById('registerForm');
        registerForm.addEventListener('submit', (e) => {
            const pwd = password.value;
            const cpwd = confirmPassword.value;
            
            if (pwd !== cpwd) {
                e.preventDefault();
                matchIndicator.style.display = 'flex';
                matchIndicator.className = 'password-match-indicator no-match shake';
                matchIndicator.querySelector('.match-icon').textContent = '✗';
                matchIndicator.querySelector('.match-text').textContent = 'Password tidak cocok!';
                return;
            }

            const btn = document.getElementById('btnRegister');
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

    <style>
        /* Password match indicator styles */
        .password-match-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 8px;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .password-match-indicator.match {
            color: #22c55e;
            background: rgba(34, 197, 94, 0.1);
        }
        
        .password-match-indicator.no-match {
            color: #ef4444;
            background: rgba(239, 68, 68, 0.1);
        }

        .password-match-indicator.shake {
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20% { transform: translateX(-8px); }
            40% { transform: translateX(8px); }
            60% { transform: translateX(-5px); }
            80% { transform: translateX(5px); }
        }

        .match-icon {
            font-size: 14px;
            font-weight: 700;
        }
    </style>

</body>
</html>