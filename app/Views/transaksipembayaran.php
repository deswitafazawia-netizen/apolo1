<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksipembayaran</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <div class="header">
    <div class="logo">
        <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
    </div>
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
                <h2>Riwayat Transaksi</h2>
                <p style="margin-bottom:20px;">3 orders</p>

                <div class="money-card">
                    <div class="money-header">Dispatched</div>

                    <div class="money-item">
                        <div class="money-info">
                            <img src="<?= base_url('assets/orang.jpeg') ?>">
                            <div class="money-text">
                                <h4>Wedding Shoot</h4>
                                <p>Besok • 07:00 - 17:00</p>
                            </div>
                        </div>

                        <div class="money-action">
                            <button class="btn btn-track">Berikan Peringatan</button>
                            <div class="link">Edit order</div>
                        </div>
                    </div>
                </div>

                <div class="money-card">
                    <div class="money-header">Delivered</div>

                    <div class="money-item">
                        <div class="money-info">
                            <img src="<?= base_url('assets/orang.jpeg') ?>">
                            <div class="money-text">
                                <h4>Kirania wedding</h4>
                                <p>2 Juli • 07:00</p>
                            </div>
                        </div>

                        <div class="money-action">
                            <button class="btn btn-detail">View details</button>
                        </div>
                    </div>
                </div>

                <div class="money-card">
                    <div class="money-header">Completed</div>

                    <div class="money-item">
                        <div class="money-info">
                            <img src="<?= base_url('assets/orang.jpeg') ?>">
                            <div class="money-text">
                                <h4>Family Session</h4>
                                <p>23 Juni • 12.65</p>
                            </div>
                        </div>

                        <div class="money-action">
                            <button class="btn btn-detail">View details</button>
                        </div>
                    </div>
                </div>

            </div>

    </div>

</body>
</html>