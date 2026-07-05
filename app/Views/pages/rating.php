<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h2>Rating & Ulasan</h2>
        <p>Lihat penilaian dan ulasan yang diberikan pelanggan terhadap layanan Anda.</p>
    </div>
    <div class="rating-summary">

        <div class="rating-score">

            <h1>4.9</h1>

            <div class="stars">
                ★★★★★
            </div>

            <p>124 Ulasan Pelanggan</p>

        </div>

        <div class="rating-detail">

            <div class="rating-row">
                <span>5 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:90%"></div>
                </div>
                <span>90%</span>
            </div>

            <div class="rating-row">
                <span>4 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:7%"></div>
                </div>
                <span>7%</span>
            </div>

            <div class="rating-row">
                <span>3 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:2%"></div>
                </div>
                <span>2%</span>
            </div>

            <div class="rating-row">
                <span>2 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:1%"></div>
                </div>
                <span>1%</span>
            </div>

            <div class="rating-row">
                <span>1 ★</span>
                <div class="progress">
                    <div class="progress-fill" style="width:0%"></div>
                </div>
                <span>0%</span>
            </div>

        </div>

    </div>

    <div class="review-container">

        <div class="review-card">

            <div class="review-header">

                <div class="profile">
                    <img src="https://i.pravatar.cc/80?img=12">

                    <div>
                        <h4>Siti Sarifatul Badriyah</h4>
                        <span>Wedding Photography</span>
                    </div>
                </div>

                <div class="review-date">
                    12 Juni 2026
                </div>

            </div>

            <div class="review-stars">
                ★★★★★
            </div>

            <p class="review-text">
                Hasil foto sangat memuaskan, fotografer ramah dan profesional.
                Pengambilan gambar tepat waktu serta hasil editing sangat bagus.
            </p>

        </div>

        <div class="review-card">

            <div class="review-header">

                <div class="profile">
                    <img src="https://i.pravatar.cc/80?img=25">

                    <div>
                        <h4>Ahmad Fauzi</h4>
                        <span>Prewedding Photography</span>
                    </div>
                </div>

                <div class="review-date">
                    10 Juni 2026
                </div>

            </div>

            <div class="review-stars">
                ★★★★★
            </div>

            <p class="review-text">
                Sangat recommended. Pelayanan cepat, hasil foto berkualitas,
                dan komunikasi sangat baik dari awal hingga akhir acara.
            </p>

        </div>

        <div class="review-card">

            <div class="review-header">

                <div class="profile">
                    <img src="https://i.pravatar.cc/80?img=36">

                    <div>
                        <h4>Deswita Fazawia</h4>
                        <span>Wisuda Photography</span>
                    </div>
                </div>

                <div class="review-date">
                    08 Juni 2026
                </div>

            </div>

            <div class="review-stars">
                ★★★★☆
            </div>

            <p class="review-text">
                Hasil foto bagus dan sesuai harapan. Pengiriman hasil cukup cepat.
                Semoga semakin sukses.
            </p>

        </div>

    </div>
<?= $this->endSection() ?>