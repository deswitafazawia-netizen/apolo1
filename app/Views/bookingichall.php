<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="bookingcontainer">

        <h1>Konfirmasi Pemesanan</h1>
        <p class="subtitle">
            Silakan baca persyaratan pemesanan dan lakukan pembayaran melalui virtual account berikut.
        </p>
        <div class="cardbooking">
            <h2>Persyaratan Pemesanan</h2>
            <ul>
                <li>Melakukan pembayaran DP sebesar <strong>Rp50.000</strong>.</li>
                <li>Melakukan konfirmasi tanggal acara sebelum pembayaran.</li>
                <li>Pembatalan tidak dapat dilakukan pada H-1 acara.</li>
                <li>DP yang sudah dibayarkan tidak dapat dikembalikan apabila terjadi pembatalan.</li>
            </ul>
        </div>
        <div class="cardbooking">
            <h2>Pembayaran Virtual Account</h2>

            <div class="va-box">
                <h3>Achmad Faisal Pratama</h3>
                <p>Bank BRI </p>
                <strong>6529 0101 3608 538</strong> 
            </div>
        </div>

        <div class="cardbooking">
            <h2>Upload Bukti Pembayaran</h2>
            <p class="upload-text">
                Setelah melakukan pembayaran, silakan upload bukti transfer Anda.
            </p>

            <div class="upload-box">
                <input type="file" id="buktiBayar" accept="image/*,.pdf">
            </div>
        </div>

        <button class="btn">Konfirmasi Pembayaran</button>

    </div>
</body>
</html>