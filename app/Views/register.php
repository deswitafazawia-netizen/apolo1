<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Daftar - Apollo Community</title>
</head>
<body>
    <div class="login-container">

    <div class="login-left">

        <div class="overlay"></div>

        <div class="brand-content">
            <span>APOLLO COMMUNITY</span>

            <h1>
                Abadikan setiap <br>
                Moment Indah
            </h1>

            <p>
                Platform jasa photography untuk
                menemukan photografer terbaik sesuai kebutuhan Anda.
            </p>
        </div>

    </div>

    <div class="login-right">

        <div class="login-card register-card">

            <img src="<?= base_url('assets/logo.png') ?>" alt="">

            <h2>Buat Akun Baru</h2>

            <p>
                Lengkapi data berikut untuk bergabung dengan Apollo Community.
            </p>

            <form action="<?= base_url('add/users') ?>" method="post">

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username">
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Masukkan Email">
                </div>

                <div class="input-group">
                    <label>No.Hp</label>
                    <input type="text" name="nohp" placeholder="Masukkan No.Hp">
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password">
                </div>

                <div class="input-group">
                    <label>Role</label>
                    <div class="select-wrapper">
                        <select name="role" id="">
                            <option value="pelanggan">Pelanggan</option>
                            <option value="photografer">Photografer</option>
                        </select>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>

                <button type="submit">
                    <i class="fa-solid fa-user-plus"></i>
                    Daftar
                </button>

            </form>

            <div class="register-link">
                Sudah memiliki akun?
                <a href="<?= base_url('login') ?>">Masuk</a>
            </div>

        </div>

    </div>

</div>
</body>
</html>