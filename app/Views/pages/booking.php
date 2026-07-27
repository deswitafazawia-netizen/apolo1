<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

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
                <input type="text" name="lokasi" id="lokasi-input" placeholder="Masukkan alamat lengkap lokasi acara" required>
                <small>Contoh: Jl. Merdeka No. 10, Kel. Sukamaju, Kec. Sumedang Utara, Kab. Sumedang, Jawa Barat 45611</small>
            </div>

            <div class="form-group">
                <label>Nomor Penanggung Jawab</label>
                <input type="tel" name="no_penanggung_jawab" id="no-penanggung-jawab" placeholder="Contoh: 08123456789" required>
            </div>

            <div class="form-group">
                <label>Total Harga</label>
                <input type="text" value="Rp <?= number_format($paket['harga'],2,',','.'); ?>" readonly>
                <input type="hidden" name="total_harga" value="<?= (float)$paket['harga']; ?>">
            </div>

            <div class="btn-form-group">
                <button type="submit" class="btn-book-now">Konfirmasi Booking</button>
                <a href="javascript:history.back()" class="btn-cancel"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>