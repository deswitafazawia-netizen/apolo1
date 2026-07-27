<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2>Pesanan Masuk</h2>
    <p>Daftar pesanan yang diajukan pelanggan kepada Anda.</p>
</div>

<div class="stats-container">

    <div class="stat-card">
        <h3><?= $total ?></h3>
        <p>Total Pesanan</p>
    </div>

    <div class="stat-card">
        <h3><?= $menunggu ?></h3>
        <p>Menunggu Konfirmasi</p>
    </div>

    <div class="stat-card">
        <h3><?= $diterima ?></h3>
        <p>Diterima</p>
    </div>

    <div class="stat-card">
        <h3><?= $selesai ?></h3>
        <p>Selesai</p>
    </div>


</div>

<div class="order-container">

    <?php if (!empty($pemesanan)): ?>
        <?php foreach ($pemesanan as $p): ?>

        <div class="order-card">

            <div class="order-left">

                <h3><?= esc($p['nama_jenis']) ?></h3>

                <p><strong>Pelanggan :</strong> <?= esc($p['nama_pelanggan']) ?></p>
                <p><strong>Tanggal :</strong> <?= date('d F Y', strtotime($p['tgl_acara'])) ?></p>
                <p><strong>Lokasi :</strong> <?= esc($p['lokasi']) ?></p>
                <p><strong>Penanggung Jawab :</strong> <?= esc($p['no_penanggung_jawab'] ?? '-') ?></p>

            </div>

            <div class="order-center">

                <?php
                $status = $p['id_status'];

                $label = [
                    1 => 'Menunggu',
                    2 => 'Diterima',
                    3 => 'Selesai',
                    4 => 'Ditolak'
                ];

                $class = [
                    1 => 'pending',
                    2 => 'accepted',
                    3 => 'completed',
                    4 => 'rejected'
                ];
                ?>

                <span class="status <?= $class[$status] ?>">
                    <?= $label[$status] ?>
                </span>

                <h4>Rp <?= number_format($p['total_harga'], 0, ',', '.') ?></h4>

            </div>

            <div class="order-right">

                <?php if ($status == 1): ?>
                    <a href="<?= base_url('dashboard/pesananmasuk/terima/'.$p['id_pemesanan']) ?>" class="btn-accept">
                        Terima
                    </a>

                    <a href="<?= base_url('dashboard/pesananmasuk/tolak/'.$p['id_pemesanan']) ?>" class="btn-reject">
                     <i class="fa-solid fa-xmark"></i>
                       Tolak
                    </a>
                <?php endif; ?>

                <a href="<?= base_url('dashboard/pesananmasuk/detail/'.$p['id_pemesanan']) ?>" class="btn-detail">
                    Detail
                </a>

            </div>

        </div>

        <?php endforeach; ?>
    <?php else: ?>

        <div class="order-card">
            <p>Belum ada pesanan masuk.</p>
        </div>

    <?php endif; ?>

</div>

<?= $this->endSection() ?>