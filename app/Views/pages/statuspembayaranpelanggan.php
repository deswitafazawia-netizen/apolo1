<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
        <?php foreach($pembayaran as $p): ?>
        <div class="payment-card">

            <div class="payment-left">

                <h3><?= esc($p['nama_jenis']) ?></h3>

                <p><strong>ID Booking :</strong>
                    BK<?= str_pad($p['id_pemesanan'],3,'0',STR_PAD_LEFT) ?>
                </p>

                <p><strong>Photografer :</strong>
                    <?= esc($p['nama_photografer']) ?>
                </p>

                <p><strong>Tanggal :</strong>
                    <?= date('d F Y',strtotime($p['tgl_acara'])) ?>
                </p>

            </div>

            <div class="payment-center">

                <span class="badge waiting">
                    Menunggu Pembayaran
                </span>

                <h4>
                    Rp <?= number_format($p['total_harga'],0,',','.') ?>
                </h4>

            </div>

            <div class="payment-right">
                
                

                <a href="<?= base_url('dashboard/bayar/'.$p['id_pemesanan']) ?>" class="btn-pay">
                    Bayar Sekarang
                </a>
                
                
            </div>

        </div>

      <?php endforeach; ?>  
<?= $this->endSection() ?>