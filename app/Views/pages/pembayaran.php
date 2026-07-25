<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Pembayaran</h2>
    <p>
        <?php if ($role === 'admin'): ?>
            Kelola dan verifikasi seluruh transaksi pembayaran.
        <?php elseif ($role === 'photografer'): ?>
            Daftar pembayaran dari pelanggan untuk layanan Anda.
        <?php else: ?>
            Status pembayaran pemesanan Anda.
        <?php endif; ?>
    </p>
</div>

<?php
$totalTransaksi = count($pembayaran);
$menunggu = 0;
$dibayar = 0;
$selesai = 0;
foreach ($pembayaran as $p) {
    $statusBayar = $p['id_status'] ?? $p['status_pemesanan'] ?? 0;
    if ($statusBayar == 3 || $statusBayar == 2) $menunggu++;
    elseif ($statusBayar == 4) $dibayar++;
    elseif ($statusBayar == 5 || $statusBayar == 1) $selesai++;
}
?>

<div class="stats-container">
    <div class="stats-card">
        <div class="stats-icon">
            <i class="fas fa-money-check-alt"></i>
        </div>
        <div>
            <h3><?= $totalTransaksi ?></h3>
            <p>Total Transaksi</p>
        </div>
    </div>
    <div class="stats-card">
        <div class="stats-icon warning">
            <i class="fas fa-clock"></i>
        </div>
        <div>
            <h3><?= $menunggu ?></h3>
            <p>Menunggu Verifikasi</p>
        </div>
    </div>
    <div class="stats-card">
        <div class="stats-icon info">
            <i class="fas fa-wallet"></i>
        </div>
        <div>
            <h3><?= $dibayar ?></h3>
            <p>Sudah Dibayar</p>
        </div>
    </div>
    <div class="stats-card">
        <div class="stats-icon success">
            <i class="fas fa-check-circle"></i>
        </div>
        <div>
            <h3><?= $selesai ?></h3>
            <p>Selesai</p>
        </div>
    </div>
</div>

<?php if (empty($pembayaran)): ?>
    <div class="empty-data">
        <i class="fa-solid fa-credit-card"></i>
        <p>Belum ada data pembayaran.</p>
    </div>
<?php else: ?>

    <?php if ($role === 'admin'): ?>
        <!-- Admin: Table View -->
        <div class="table-container">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pelanggan</th>
                        <th>Photografer</th>
                        <th>Jenis</th>
                        <th>Total</th>
                        <th>Jumlah Bayar</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pembayaran as $p): ?>
                        <tr>
                            <td>BYR<?= str_pad($p['id_pembayaran'], 3, '0', STR_PAD_LEFT) ?></td>
                            <td><?= esc($p['nama_pelanggan'] ?? '-') ?></td>
                            <td><?= esc($p['nama_photografer'] ?? '-') ?></td>
                            <td><?= esc($p['nama_jenis'] ?? '-') ?></td>
                            <td>Rp <?= number_format($p['total_harga'] ?? 0, 0, ',', '.') ?></td>
                            <td>Rp <?= number_format($p['jumlah_bayar'] ?? 0, 0, ',', '.') ?></td>
                            <td>
                                <?php $st = $p['id_status'] ?? 0; ?>
                                <?php if ($st == 3 || $st == 2): ?>
                                    <span class="badge-pending">Menunggu</span>
                                <?php elseif ($st == 4): ?>
                                    <span class="badge-dp">Dibayar</span>
                                <?php elseif ($st == 5 || $st == 1): ?>
                                    <span class="badge-success">Selesai</span>
                                <?php else: ?>
                                    <span class="badge-reject">-</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $p['tgl_pembayaran'] ? date('d/m/Y', strtotime($p['tgl_pembayaran'])) : '-' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php elseif ($role === 'photografer'): ?>
        <!-- Photographer: Card View -->
        <div class="payment-container">
            <?php foreach ($pembayaran as $p): ?>
                <div class="payment-card">
                    <div class="payment-info">
                        <h3><?= esc($p['nama_jenis'] ?? 'Pemesanan') ?></h3>
                        <p><strong>Pelanggan :</strong> <?= esc($p['nama_pelanggan'] ?? '-') ?></p>
                        <p><strong>ID Booking :</strong> BK<?= str_pad($p['id_pemesanan'], 3, '0', STR_PAD_LEFT) ?></p>
                        <p><strong>Tanggal Bayar :</strong> <?= $p['tgl_pembayaran'] ? date('d M Y', strtotime($p['tgl_pembayaran'])) : '-' ?></p>
                    </div>
                    <div class="payment-status">
                        <?php $st = $p['id_status'] ?? 0; ?>
                        <?php if ($st == 3 || $st == 2): ?>
                            <span class="status waiting">Menunggu Verifikasi</span>
                        <?php elseif ($st == 4): ?>
                            <span class="status dp">Sudah Dibayar</span>
                        <?php elseif ($st == 5 || $st == 1): ?>
                            <span class="status success">Selesai</span>
                        <?php endif; ?>
                        <h4>Rp <?= number_format($p['jumlah_bayar'] ?? 0, 0, ',', '.') ?></h4>
                    </div>
                    <div class="payment-action">
                        <a href="#" class="btn-detail">Detail</a>
                        <?php if ($st == 3 || $st == 2): ?>
                            <a href="#" class="btn-verify">Verifikasi</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php elseif ($role === 'pelanggan'): ?>
        <!-- Customer: Card View -->
        <div class="payment-container">
            <?php foreach ($pembayaran as $p): ?>
                <div class="payment-card">
                    <div class="payment-info">
                        <h3><?= esc($p['nama_jenis'] ?? 'Pemesanan') ?></h3>
                        <p><strong>ID Booking :</strong> BK<?= str_pad($p['id_pemesanan'], 3, '0', STR_PAD_LEFT) ?></p>
                        <p><strong>Photografer :</strong> <?= esc($p['nama_photografer'] ?? '-') ?></p>
                        <p><strong>Tanggal Acara :</strong> <?= $p['tgl_acara'] ? date('d F Y', strtotime($p['tgl_acara'])) : '-' ?></p>
                    </div>
                    <div class="payment-status">
                        <?php $st = $p['id_status'] ?? 0; ?>
                        <?php if ($st == 3 || $st == 2): ?>
                            <span class="badge waiting">Menunggu Pembayaran</span>
                        <?php elseif ($st == 4): ?>
                            <span class="badge dp">Sudah Dibayar</span>
                        <?php elseif ($st == 5 || $st == 1): ?>
                            <span class="badge success">Selesai</span>
                        <?php endif; ?>
                        <h4>Rp <?= number_format($p['total_harga'] ?? 0, 0, ',', '.') ?></h4>
                    </div>
                    <div class="payment-action">
                        <?php if ($st == 3 || $st == 2): ?>
                            <a href="<?= base_url('dashboard/bayar/'.$p['id_pemesanan']) ?>" class="btn-pay">
                                Bayar Sekarang
                            </a>
                        <?php else: ?>
                            <a href="#" class="btn-detail">Detail</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
<?php endif; ?>

<?= $this->endSection() ?>
