<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

    <div class="page-header">
        <h2>Daftar Pemesanan</h2>
        <p>Kelola seluruh pemesanan jasa photography yang telah dibuat pelanggan.</p>
    </div>
    <div class="order-container">

    <?php if(!empty($pemesanan)): ?>

        <?php foreach($pemesanan as $p): ?>

        <div class="order-card">

            <div class="order-info">

                <h3><?= esc($p['nama_jenis']); ?></h3>

                <p>
                    <strong>Pelanggan :</strong>
                    <?= esc($p['nama_pelanggan']); ?>
                </p>

                <p>
                    <strong>Photografer :</strong>
                    <?= esc($p['nama_photografer']); ?>
                </p>

                <p>
                    <strong>Tanggal Acara :</strong>
                    <?= date('d F Y', strtotime($p['tgl_acara'])); ?>
                </p>

                <p>
                    <strong>Lokasi :</strong>
                    <?= esc($p['lokasi']); ?>
                </p>

            </div>

            <div class="order-detail">

                <?php if($p['id_status']==1): ?>

                    <span class="status pending">
                        Menunggu Disetujui
                    </span>

                <?php elseif($p['id_status']==2): ?>

                    <span class="status success">
                        Diproses
                    </span>

                <?php elseif($p['id_status']==3): ?>

                    <span class="status done">
                        Selesai
                    </span>

                <?php endif; ?>

                <h4>
                    Rp <?= number_format($p['total_harga'],0,',','.'); ?>
                </h4>

            </div>

        </div>

        <?php endforeach; ?>

    <?php else: ?>

    <div class="order-card">
        <p>Belum ada data pemesanan.</p>
    </div>

    <?php endif; ?>

    </div>

<?= $this->endSection() ?>