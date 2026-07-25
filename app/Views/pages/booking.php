<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<section class="booking-header">
    <h1>BOOKING</h1>
    <p>Lengkapi informasi pemesanan untuk melakukan booking photographer pilihan Anda.</p>
</section>

<?php if(session()->getFlashdata('success')) : ?>
    <div class="alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
<?php if(session()->getFlashdata('error')) : ?>
    <div class="alert-error"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<div class="booking-container">
    <div class="booking-form">
        <h2>Informasi Pemesanan</h2>

        <div class="selected-photographer">
            <h3><?= esc($photografer['nama_photografer']); ?></h3>
        </div>

        <form action="<?= base_url('dashboard/booking/simpan') ?>" method="post">
            <?= csrf_field() ?>

            <input type="hidden" name="id_photografer" value="<?= $photografer['id_photografer']; ?>">

            <div class="form-group">
                <label>Paket Photography</label>
                <input type="text" value="<?= esc($paket['nama_jenis']); ?>" readonly>
                <input type="hidden" name="id_jenis_photography" value="<?= $paket['id_jenis_photography']; ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Acara</label>
                <input type="date" name="tgl_acara" required>
            </div>

            <div class="form-group">
                <label>Lokasi Acara</label>
                <div style="display:flex;gap:10px;">
                    <input type="text" name="lokasi" id="lokasi-input" placeholder="Klik peta atau gunakan lokasi saat ini" required style="flex:1;">
                    <button type="button" id="btn-my-location" class="btn-my-location" title="Gunakan lokasi saya"><i class="fa-solid fa-crosshairs"></i></button>
                </div>
                <div id="booking-map"></div>
                <small>Klik pada peta untuk memilih lokasi, atau klik tombol <i class="fa-solid fa-crosshairs"></i> untuk menggunakan lokasi Anda saat ini.</small>
            </div>

            <div class="form-group">
                <label>Total Harga</label>
                <input type="text" value="Rp <?= number_format($paket['harga'],0,',','.'); ?>" readonly>
                <input type="hidden" name="total_harga" value="<?= (float)$paket['harga']; ?>">
            </div>

            <button type="submit" class="btn-book-now">Konfirmasi Booking</button>
        </form>
    </div>
</div>

<script>
var map = L.map('booking-map').setView([-6.9175, 107.6191], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

var marker = null;

map.on('click', function(e) {
    setLocation(e.latlng.lat, e.latlng.lng);
});

function setLocation(lat, lng) {
    if (marker) map.removeLayer(marker);
    marker = L.marker([lat, lng]).addTo(map);
    map.setView([lat, lng], 15);

    fetch('https://nominatim.openstreetmap.org/reverse?format=json&lat=' + lat + '&lon=' + lng + '&addressdetails=1&accept-language=id')
        .then(function(res) { return res.json(); })
        .then(function(data) {
            document.getElementById('lokasi-input').value = data.display_name || lat + ', ' + lng;
        })
        .catch(function() {
            document.getElementById('lokasi-input').value = lat + ', ' + lng;
        });
}

document.getElementById('btn-my-location').addEventListener('click', function() {
    if (!navigator.geolocation) {
        alert('Geolocation tidak didukung oleh browser Anda.');
        return;
    }
    this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';
    this.disabled = true;

    navigator.geolocation.getCurrentPosition(
        function(pos) {
            setLocation(pos.coords.latitude, pos.coords.longitude);
            document.getElementById('btn-my-location').innerHTML = '<i class="fa-solid fa-crosshairs"></i>';
            document.getElementById('btn-my-location').disabled = false;
        },
        function(err) {
            alert('Tidak dapat mengambil lokasi: ' + err.message);
            document.getElementById('btn-my-location').innerHTML = '<i class="fa-solid fa-crosshairs"></i>';
            document.getElementById('btn-my-location').disabled = false;
        },
        { enableHighAccuracy: true, timeout: 10000, maximumAge: 0 }
    );
});
</script>

<?= $this->endSection() ?>