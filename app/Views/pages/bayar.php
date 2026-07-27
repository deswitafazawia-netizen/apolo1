<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2>Pembayaran</h2>
    <p>Lakukan pembayaran untuk mengonfirmasi pemesanan jasa photography Anda.</p>
</div>

<div class="payment-layout">
    <div class="payment-card">
        <div class="payment-card-header">
            <i class="fas fa-credit-card"></i>
            <h3>Detail Pembayaran</h3>
        </div>

        <div class="payment-info">
            <div class="payment-info-row">
                <span class="payment-info-label">Photografer</span>
                <span class="payment-info-value"><?= esc($pemesanan['nama_photografer'] ?? '-') ?></span>
            </div>
            <div class="payment-info-row">
                <span class="payment-info-label">Jenis</span>
                <span class="payment-info-value"><?= esc($pemesanan['nama_jenis'] ?? '-') ?></span>
            </div>
            <div class="payment-info-row">
                <span class="payment-info-label">Tanggal Acara</span>
                <span class="payment-info-value"><?= $pemesanan['tgl_acara'] ? date('d F Y', strtotime($pemesanan['tgl_acara'])) : '-' ?></span>
            </div>
            <div class="payment-info-row">
                <span class="payment-info-label">Lokasi</span>
                <span class="payment-info-value"><?= esc($pemesanan['lokasi'] ?? '-') ?></span>
            </div>
            <div class="payment-info-row payment-info-total">
                <span class="payment-info-label">Total Harga</span>
                <span class="payment-info-value">Rp <?= number_format($pemesanan['total_harga'] ?? 0, 0, ',', '.') ?></span>
            </div>
        </div>

        <form action="<?= base_url('dashboard/bayar/simpan') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id_pemesanan" value="<?= $pemesanan['id_pemesanan'] ?>">
            <input type="hidden" name="total_harga" value="<?= (float)($pemesanan['total_harga'] ?? 0) ?>">
            <input type="hidden" name="jumlah_bayar" id="jumlahBayar" value="">

            <div class="form-group">
                <label for="jenisPembayaran">Jenis Pembayaran</label>
                <div class="select-wrapper">
                    <select name="jenis_pembayaran" id="jenisPembayaran" required>
                        <option value="">-- Pilih --</option>
                        <option value="DP">Bayar DP</option>
                        <option value="Lunas">Bayar Lunas</option>
                    </select>
                </div>
            </div>

            <div class="form-group" id="infoBayar" style="display:none;">
                <label>Nominal Pembayaran</label>
                <div class="info-box">
                    <i class="fas fa-info-circle"></i>
                    <p id="textBayar"></p>
                </div>
            </div>

            <div class="form-group">
                <label for="metodePembayaran">Metode Pembayaran</label>
                <div class="select-wrapper">
                    <select name="metode_pembayaran" id="metodePembayaran" onchange="metodeBayar()" required>
                        <option value="">-- Pilih Metode --</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Tunai">Tunai</option>
                    </select>
                </div>
            </div>

            <div id="transferArea" style="display:none;">
                <div class="rekening-box">
                    <div class="rekening-header">
                        <i class="fas fa-university"></i>
                        <h4>Transfer ke Rekening</h4>
                    </div>
                    <div class="rekening-body">
                        <p class="rekening-bank">Bank BCA</p>
                        <p class="rekening-number">1234567890</p>
                        <p class="rekening-name">a.n. Komunitas Apolo</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bukti_transfer">Upload Bukti Transfer</label>
                    <div class="file-upload-wrapper">
                        <input type="file" name="bukti_transfer" id="bukti_transfer">
                    </div>
                </div>
            </div>

            <div id="tunaiArea" style="display:none;">
                <div class="info-box">
                    <i class="fas fa-hand-holding-usd"></i>
                    <p>Pembayaran dilakukan secara tunai kepada photografer pada saat pertemuan sesuai kesepakatan.</p>
                </div>
            </div>

            <div class="btn-form-group">
                <button type="submit" class="btn-pay">
                    <i class="fas fa-paper-plane"></i>
                    Kirim Pembayaran
                </button>
                <a href="<?= base_url('dashboard/pemesanan') ?>" class="btn-cancel"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
        </form>
    </div>
</div>

<script>
function metodeBayar(){
    let metode = document.getElementById('metodePembayaran').value;
    document.getElementById('transferArea').style.display = metode === 'Transfer' ? 'block' : 'none';
    document.getElementById('tunaiArea').style.display = metode === 'Tunai' ? 'block' : 'none';
}

document.getElementById('jenisPembayaran').addEventListener('change', function(){
    let total = parseFloat(document.querySelector('input[name="total_harga"]').value) || 0;
    let infoBayar = document.getElementById('infoBayar');
    let textBayar = document.getElementById('textBayar');
    let jumlahBayar = document.getElementById('jumlahBayar');

    if (this.value === 'DP') {
        jumlahBayar.value = 50000;
        textBayar.innerHTML = 'DP sebesar <strong>Rp 50.000</strong> (Rp ' + total.toLocaleString('id-ID') + ' × 50%)';
        infoBayar.style.display = 'block';
    } else if (this.value === 'Lunas') {
        jumlahBayar.value = total;
        textBayar.innerHTML = 'Pembayaran lunas sebesar <strong>Rp ' + total.toLocaleString('id-ID') + '</strong>';
        infoBayar.style.display = 'block';
    } else {
        infoBayar.style.display = 'none';
        jumlahBayar.value = '';
    }
});
</script>

<?= $this->endSection() ?>
