<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jack Picture</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <?= $this->include('view-chat') ?>
        <button class="chat" data-toggle="chat">
            <i class="fa-solid fa-message"></i>
        </button>
    <nav class="navbar">
        <div class="logo">
            <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
        </div>

        <button class="booking-btn"></button>
    </nav>

    <section class="hero">
        <h1>Portofolio | Jack Picture</h1>
        <p>Pilihan paket foto profesional dengan kualitas premium dari Jack Picture.</p>
    </section>

<section class="gallery">
        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/jackakad.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET AKAD </h3>
            <p>
                 1hjdhdhjhf 
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
            </p>

            <div class="price">
                <h2>Rp 000.000</h2>
            </div>

        </div>
    </div>
    
    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/jackprewedding.webp') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET PREWEDDING</h3>
            <p>
                hjdhdhjhf 
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
            </p>

            <div class="price">
                <h2>Rp 000.000</h2>
            </div>

        </div>
    </div>

    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/jacktunangan.webp') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET ENGIGEMENT</h3>
            <p>
                hjdhdhjhf 
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
            </p>

            <div class="price">
                <h2>Rp 000.000</h2>
            </div>

        </div>
    </div>

        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/jackwedding1.webp') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WEDDING 1</h3>
            <p>
                hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
            </p>

            <div class="price">
                <h2>Rp 000.000</h2>
            </div>

        </div>
    </div>

        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/jackwedding2.webp') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WEDDING 2</h3>
            <p>
                hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
            </p>

            <div class="price">
                <h2>Rp 000.000</h2>
            </div>

        </div>
    </div>

        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/jackwisuda.webp') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WISUDA</h3>
            <p>
                hjdhdhjhf 
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
                - hjdhdhjhf
            </p>

            <div class="price">
                <h2>Rp 000.000</h2>
            </div>
        </div>
    </div>
    </div>

</section>
    <div id="bookingModal" class="booking-modal">
        
        <div class="booking-content">
            <span class="close-btn" onclick="closeBooking()">&times;</span>
            
            <iframe src="<?= base_url('bookingichall') ?>"></iframe>
        </div>

    </div>
        <script>
        function openBooking(){
            document.getElementById("bookingModal").style.display = "block";
        }

        function closeBooking(){
            document.getElementById("bookingModal").style.display = "none";
        }
        </script>
        <script src="<?= base_url('js/script.js') ?>"></script>c
</body>
</html>