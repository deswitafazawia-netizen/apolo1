<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h2>Pembayaran Pelanggan</h2>    
        <p>Daftar pembayaran yang telah dilakukan pelanggan untuk layanan photography.</p>
    </div>

    <div class="payment-stats">

        <div class="stat-card">
            <h3>15</h3>
            <p>Total Transaksi</p>
        </div>

        <div class="stat-card">
            <h3>5</h3>
            <p>Menunggu Verifikasi</p>
        </div>

        <div class="stat-card">
            <h3>4</h3>
            <p>DP Dibayar</p>
        </div>

        <div class="stat-card">
            <h3>6</h3>
            <p>Lunas</p>
        </div>

    </div>

    <div class="payment-container">

        <div class="payment-card">

            <div class="payment-info">

                <h3>Wedding Photography</h3>

                <p><strong>Pelanggan :</strong> Siti Sarifatul Badriyah</p>
                <p><strong>ID Booking :</strong> BK001</p>
                <p><strong>Tanggal Bayar :</strong> 12 Juni 2026</p>

            </div>

            <div class="payment-status">

                <span class="status waiting">
                    Menunggu Verifikasi
                </span>

                <h4>Rp 750.000</h4>

            </div>

            <div class="payment-action">

                <a href="#" class="btn-detail">
                    Detail
                </a>

                <a href="#" class="btn-verify">
                    Verifikasi
                </a>

            </div>

        </div>

        <div class="payment-card">

            <div class="payment-info">

                <h3>Prewedding Photography</h3>

                <p><strong>Pelanggan :</strong> Ahmad Fauzi</p>
                <p><strong>ID Booking :</strong> BK002</p>
                <p><strong>Tanggal Bayar :</strong> 10 Juni 2026</p>

            </div>

            <div class="payment-status">

                <span class="status dp">
                    DP Dibayar
                </span>

                <h4>Rp 1.000.000</h4>

            </div>

            <div class="payment-action">

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

        <div class="payment-card">

            <div class="payment-info">

                <h3>Wisuda Photography</h3>

                <p><strong>Pelanggan :</strong> Deswita Fazawia</p>
                <p><strong>ID Booking :</strong> BK003</p>
                <p><strong>Tanggal Bayar :</strong> 08 Juni 2026</p>

            </div>

            <div class="payment-status">

                <span class="status success">
                    Lunas
                </span>

                <h4>Rp 850.000</h4>

            </div>

            <div class="payment-action">

                <a href="#" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

    </div>
<?= $this->endSection() ?>