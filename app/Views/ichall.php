<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ichall</title>
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
        <h1>Portofolio | Ichall Photograph</h1>
        <p>Pilihan paket foto profesional dengan kualitas premium dari Ichall Photograph.</p>
    </section>

<section class="gallery">
        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/akad1ichall.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET AKAD 1</h3>
            <p>
                 1/2 Photografer 
                - Foto 1 Album
                - Cetak 40 foto uk.4R
                - File Via Link Drive
            </p>

            <div class="price">
                <h2>Rp 400.000</h2>
            </div>

        </div>
    </div>
    
    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/akad2ichall.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET AKAD 2</h3>
            <p>
                2 Photografer 
                - Foto 1 Album Vidi Magnetic
                - Cetak 40 foto uk.4R
                - unlimited File
                - File Via Link Drive
            </p>

            <div class="price">
                <h2>Rp 600.000</h2>
            </div>

        </div>
    </div>

    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/wedding1ichall.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WEDDING 1</h3>
            <p>
                2 Photografer 
                - Foto 1 Album Magnetic Uk.Sedang
                - Cetak 80 foto uk.4R
                - Cetak 1 foto plus vigura uk.10RS
                - 1 hari kerja
                - Free Flashdisk
            </p>

            <div class="price">
                <h2>Rp 1.300.000</h2>
            </div>

        </div>
    </div>

        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/wedding2ichall.jpeg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WEDDING 2</h3>
            <p>
                2 Photografer 
                - Foto 1 Album Magnetic Uk.Besar
                - Cetak 120 foto uk.4R
                - Cetak 1 foto plus vigura uk.10RS
                - Unlimited File
                - 1-2 hari kerja
                - Free Flashdisk
            </p>

            <div class="price">
                <h2>Rp 1.600.000</h2>
            </div>

        </div>
    </div>

        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/wedding3ichall.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WEDDING 3</h3>
            <p>
                2 Photografer 
                - Foto 1 Album Magnetic Uk.Besar
                - Cetak 120 foto uk.4R
                - Cetak 1 foto plus vigura uk.12RS
                - Unlimited File
                - 1/2 hari kerja
                - Free Flashdisk & Custom Nama Album
            </p>

            <div class="price">
                <h2>Rp 1.800.000</h2>
            </div>

        </div>
    </div>

        <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/weddingspesialichall.jpeg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PAKET WEDDING SPESIAL</h3>
            <p>
                2/3 Photografer 
                - Album Spesial Full Magazine
                - Cetak 1 foto plus vigura uk.12RS
                - Unlimited File
                - 1/2 hari kerja
                - Free Custom Nama Album
                - Free Flashdisk
            </p>

            <div class="price">
                <h2>Rp 2.000.000</h2>
            </div>
        </div>
    </div>

    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/prewedingichall.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PREWED OUTDOUR 1</h3>
            <p>
                1/2 Photografer  
                - Cetak 2 Banner 60X70cm
                - 1 Custom
                - File Via Link Drive
            </p>

            <div class="price">
                <h2>Rp 400.000</h2>
            </div>
        </div>
    </div>

        <div class="paket-card">
                <div class="image-container">
                <img src="<?= base_url('assets/prewedding2ichall.jpeg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>PREWED OUTDOUR 2</h3>
            <p>
                1/2 Photografer  
                - 2 Lembar Cetak Foto 12RS
                - 1/2 Custom
                - Unlimited File
                - All File Google Drive
                - 1 Hari Kerja
            </p>

            <div class="price">
                <h2>Rp 600.000</h2>
            </div>
        </div>
    </div>

    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/wisudaichall1.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>WISUDA PAKET 1</h3>
            <p> 
                Sesi foto keluarga -
                Sesi foto Hunting -
                Foto All edit -
                File via link Drive
            </p>

            <div class="price">
                <h2>Rp 250.000</h2>
            </div>
        </div>
    </div>

    <div class="paket-card">
            <div class="image-container">
                <img src="<?= base_url('assets/wisudaichall2.jpg') ?>" alt="">

                <div class="overlay">
                    <button onclick="openBooking()">Pesan Sekarang</button>
                </div>
            </div>

        <div class="card-content">
            <h3>WISUDA PAKET 2</h3>
            <p> 
                Sesi foto keluarga -
                Sesi foto Hunting -
                Unlimited File -
                Foto All edit -
                Free Cetak Album Foto
                File via Google Drive
            </p>

            <div class="price">
                <h2>Rp 350.000</h2>
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