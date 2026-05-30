<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="header">
    <div class="logo">
        <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
    </div>
        <div>👤 Admin</div>
    </div>

    <div class="container">

        <div class="sidebar">
            <ul>
                <li><a href="<?= base_url('dashboardadmin') ?>">Pesanan Photography</a></li>
                <li><a href="<?= base_url('datapelanggan') ?>">Data Pelanggan</a></li>
                <li><a href="<?= base_url('dataphotografer') ?>">Data Fotografer</a></li>
                <li><a href="<?= base_url('transaksipembayaran') ?>">Transaksi Pembayaran</a></li>
                <li><a href="<?= base_url('laporan') ?>">Laporan</a></li>
                <li><a href="<?= base_url('login') ?>">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Dashboard</h2>

            <div class="card-container">
                <div class="card">
                    <h3>Total Pesanan</h3>
                    <p>120</p>
                </div>

                <div class="card">
                    <h3>Data Pelanggan</h3>
                    <p>80</p>
                </div>

                <div class="card">
                    <h3>Data Fotografer</h3>
                    <p>25</p>
                </div>

                <div class="card">
                    <h3>Total Paket</h3>
                    <p>10</p>
                </div>
            </div>

        </div>

    </div>

</body>
</html>