<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboardphotografer</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
    </div>

        <div class="right">
            <div class="notif-icon">
                <i class="fa-solid fa-message"></i>
                <span class="notif-badge">1</span>
            </div>

            <img src="<?= base_url('assets/orang.jpeg') ?>" alt="user" class="user">
        </div>
</div>
<div class="container">
    <div class="sidebar">
        <ul>
            <li><a href="<?= base_url('dashboardphotografer') ?>">History</a></li>
            <li><a href="<?= base_url('pesananjasa') ?>">Pesanan Jasa</a></li>
            <li><a href="<?= base_url('proyeklelang') ?>">Proyek Lelang</a></li>
            <li><a href="<?= base_url('') ?>">Status Pembayaran</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Order history</h2>
        <p style="margin-bottom:20px;">3 orders</p>

        <div class="order-card">
            <div class="order-header">Dispatched</div>

            <div class="order-item">
                <div class="order-info">
                    <img src="<?= base_url('assets/orang.jpeg') ?>">
                    <div class="order-text">
                        <h4>Wedding Shoot</h4>
                        <p>Besok • 07:00 - 17:00</p>
                    </div>
                </div>

                <div class="order-action">
                    <button class="btn btn-track">Track order</button>
                    <button class="btn btn-detail">View details</button>
                    <div class="link">Edit order</div>
                </div>
            </div>
        </div>

        <div class="order-card">
            <div class="order-header">Delivered</div>

            <div class="order-item">
                <div class="order-info">
                    <img src="<?= base_url('assets/orang.jpeg') ?>">
                    <div class="order-text">
                        <h4>Prewedding Shoot</h4>
                        <p>2 Juli • 07:00 - 17:00</p>
                    </div>
                </div>

                <div class="order-action">
                    <button class="btn btn-detail">View details</button>
                    <div class="link">Get invoice</div>
                </div>
            </div>
        </div>

        <div class="order-card">
            <div class="order-header">Completed</div>

            <div class="order-item">
                <div class="order-info">
                    <img src="<?= base_url('assets/orang.jpeg') ?>">
                    <div class="order-text">
                        <h4>Family Session</h4>
                        <p>23 Juni • Banyuwangi</p>
                    </div>
                </div>

                <div class="order-action">
                    <button class="btn btn-detail">View details</button>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>