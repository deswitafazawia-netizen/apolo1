<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2><?= $aksi === 'tolak' ? 'Tolak Pesanan' : 'Batalkan Pesanan' ?></h2>
    <p><?= $aksi === 'tolak' ? 'Masukkan alasan penolakan pesanan' : 'Masukkan alasan pembatalan pesanan' ?></p>
</div>

<div class="booking-container">
    <div class="booking-form">
        <div class="selected-photographer">
            <h3><?= esc($pemesanan['nama_jenis'] ?? 'Pemesanan') ?></h3>
        </div>

        <div class="form-group">
            <label>Photografer</label>
            <input type="text" value="<?= esc($pemesanan['nama_photografer'] ?? '-') ?>" readonly>
        </div>

        <div class="form-group">
            <label>Tanggal Acara</label>
            <input type="text" value="<?= $pemesanan['tgl_acara'] ? date('d F Y', strtotime($pemesanan['tgl_acara'])) : '-' ?>" readonly>
        </div>

        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" value="<?= esc($pemesanan['lokasi'] ?? '-') ?>" readonly>
        </div>

        <div class="form-group">
            <label>Total Harga</label>
            <input type="text" value="Rp <?= number_format($pemesanan['total_harga'] ?? 0, 0, ',', '.') ?>" readonly>
        </div>

        <form action="" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="alasan">Alasan <?= $aksi === 'tolak' ? 'Penolakan' : 'Pembatalan' ?></label>
                <textarea name="alasan" id="alasan" rows="5" placeholder="Tuliskan alasan..." required></textarea>
            </div>
            <div style="display:flex;gap:10px;margin-top:20px;">
                <button type="submit" class="<?= $aksi === 'tolak' ? 'btn-reject' : 'btn-cancel' ?>" style="flex:1;padding:12px;">
                    <?= $aksi === 'tolak' ? 'Kirim Penolakan' : 'Kirim Pembatalan' ?>
                </button>
                <a href="<?= base_url('dashboard/pemesanan') ?>" class="btn-accept" style="flex:1;text-align:center;padding:12px;">Kembali</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
