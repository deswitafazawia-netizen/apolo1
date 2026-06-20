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
    <div class="login-container">

    <div class="login-left">

        <div class="overlay"></div>

        <div class="brand-content">
            <span>APOLLO COMMUNITY</span>

            <h1>
                Capture Every <br>
                Beautiful Moment
            </h1>

            <p>
                Platform jasa fotografi profesional untuk
                menemukan photografer terbaik sesuai kebutuhan Anda.
            </p>
        </div>

    </div>

    <div class="login-right">

        <div class="login-card">

            <img src="<?= base_url('assets/logo.png') ?>" alt="">

            <h2>Selamat Datang</h2>

            <p>
                Masuk ke akun Anda untuk melanjutkan
            </p>

            <form action="" method="post">

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" placeholder="Masukkan Username">
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" placeholder="Masukkan Email">
                </div>

                <div class="input-group">
                    <label>No.Hp</label>
                    <input type="text" placeholder="Masukkan No.Hp">
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Masukkan Password">
                </div>

                <button type="submit">
                    Login
                </button>

            </form>

            <div class="register-link">
                Belum punya akun?
                <a href="#">Daftar Sekarang</a>
            </div>

        </div>

    </div>

</div>
</body>
</html>