<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Pemesanan</h2>
    <p>
        <?php if ($role === 'admin'): ?>
            Kelola seluruh data pemesanan jasa photography.
        <?php elseif ($role === 'photografer'): ?>
            Daftar pesanan yang diajukan pelanggan kepada Anda.
        <?php else: ?>
            Daftar pemesanan jasa photography yang telah Anda buat.
        <?php endif; ?>
    </p>
</div>

<div class="stats-container">
    <div class="stats-card">
        <div class="stats-icon">
            <i class="fas fa-calendar-check"></i>
        </div>
        <div>
            <h3><?= $total ?></h3>
            <p>Total Pemesanan</p>
        </div>
    </div>
    <div class="stats-card">
        <div class="stats-icon warning">
            <i class="fas fa-clock"></i>
        </div>
        <div>
            <h3><?= $menunggu ?></h3>
            <p>Menunggu Konfirmasi</p>
        </div>
    </div>
    <div class="stats-card">
        <div class="stats-icon info">
            <i class="fas fa-camera"></i>
        </div>
        <div>
            <h3><?= $diproses ?></h3>
            <p>Sedang Berjalan</p>
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
    <?php if ($role === 'photografer' || $role === 'pelanggan'): ?>
    <div class="stats-card">
        <div class="stats-icon" style="background:linear-gradient(135deg,#ef4444,#dc2626)">
            <i class="fas fa-times-circle"></i>
        </div>
        <div>
            <h3><?= $ditolak ?></h3>
            <p>Ditolak</p>
        </div>
    </div>
    <div class="stats-card">
        <div class="stats-icon" style="background:linear-gradient(135deg,#6b7280,#4b5563)">
            <i class="fas fa-ban"></i>
        </div>
        <div>
            <h3><?= $dibatalkan ?></h3>
            <p>Dibatalkan</p>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($role === 'admin'): ?>
    <div class="stats-card">
        <div class="stats-icon" style="background:linear-gradient(135deg,#6b7280,#4b5563)">
            <i class="fas fa-ban"></i>
        </div>
        <div>
            <h3><?= $dibatalkan ?></h3>
            <p>Dibatalkan</p>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php if (empty($pemesanan)): ?>
    <div class="empty-data">
        <i class="fa-solid fa-calendar"></i>
        <p>Belum ada data pemesanan.</p>
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
                        <th>Tanggal Acara</th>
                        <th>Lokasi</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pemesanan as $p): ?>
                        <?php
                        $label = [
                            1 => ['text' => 'Menunggu', 'class' => 'badge-pending'],
                            2 => ['text' => 'Diproses', 'class' => 'badge-process'],
                            3 => ['text' => 'Selesai', 'class' => 'badge-success'],
                            4 => ['text' => 'Ditolak', 'class' => 'badge-reject'],
                            5 => ['text' => 'Dibatalkan', 'class' => 'badge-cancel'],
                        ];
                        $s = $p['id_status'];
                        ?>
                        <tr>
                            <td><?= $p['id_pemesanan'] ?></td>
                            <td><?= esc($p['nama_pelanggan'] ?? '-') ?></td>
                            <td><?= esc($p['nama_photografer'] ?? '-') ?></td>
                            <td><?= esc($p['nama_jenis'] ?? '-') ?></td>
                            <td><?= $p['tgl_acara'] ? date('d/m/Y', strtotime($p['tgl_acara'])) : '-' ?></td>
                            <td><?= esc($p['lokasi'] ?? '-') ?></td>
                            <td>Rp <?= number_format($p['total_harga'] ?? 0, 0, ',', '.') ?></td>
                            <td>
                                <span class="<?= $label[$s]['class'] ?? 'badge-pending' ?>">
                                    <?= $label[$s]['text'] ?? '-' ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php elseif ($role === 'photografer'): ?>
        <!-- Photographer: Card View -->
        <div class="order-container">
            <?php foreach ($pemesanan as $p): ?>
                <div class="order-card">
                    <div class="order-info">
                        <h3><?= esc($p['nama_jenis'] ?? 'Pemesanan') ?></h3>
                        <p><strong>Pelanggan :</strong> <?= esc($p['nama_pelanggan'] ?? '-') ?></p>
                        <p><strong>Tanggal :</strong> <?= $p['tgl_acara'] ? date('d F Y', strtotime($p['tgl_acara'])) : '-' ?></p>
                        <p><strong>Lokasi :</strong> <?= esc($p['lokasi'] ?? '-') ?>
                            <?php if (!empty($p['lokasi'])): ?>
                            <a href="https://www.google.com/maps/search/<?= urlencode($p['lokasi']) ?>" target="_blank" class="btn-map-link"><i class="fa-solid fa-map-location-dot"></i></a>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="order-detail">
                        <?php
                        $classMap = [1 => 'pending', 2 => 'accepted', 3 => 'completed', 4 => 'rejected', 5 => 'canceled'];
                        $labelMap = [1 => 'Menunggu', 2 => 'Diterima', 3 => 'Selesai', 4 => 'Ditolak', 5 => 'Dibatalkan'];
                        $s = $p['id_status'];
                        ?>
                        <span class="status <?= $classMap[$s] ?? 'pending' ?>">
                            <?= $labelMap[$s] ?? '-' ?>
                        </span>
                        <h4>Rp <?= number_format($p['total_harga'] ?? 0, 0, ',', '.') ?></h4>
                    </div>
                    <div class="order-action">
                        <?php if ($s == 1): ?>
                            <a href="<?= base_url('dashboard/pemesanan/terima/'.$p['id_pemesanan']) ?>" class="btn-accept">Terima</a>
                            <a href="<?= base_url('dashboard/pemesanan/tolak/'.$p['id_pemesanan']) ?>" class="btn-reject"><i class="fa-solid fa-xmark"></i> Tolak</a>
                        <?php endif; ?>
                        <?php if ($s == 1 || $s == 2 || $s == 3): ?>
                            <a href="<?= base_url('dashboard/pemesanan/batalkan/'.$p['id_pemesanan']) ?>" class="btn-cancel"><i class="fa-solid fa-ban"></i> Batalkan</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php elseif ($role === 'pelanggan'): ?>
        <!-- Customer: Card View -->
        <div class="order-container">
            <?php foreach ($pemesanan as $p): ?>
                <div class="order-card">
                    <div class="order-info">
                        <h3><?= esc($p['nama_jenis'] ?? 'Pemesanan') ?></h3>
                        <p><strong>Photografer :</strong> <?= esc($p['nama_photografer'] ?? '-') ?></p>
                        <p><strong>Tanggal Acara :</strong> <?= $p['tgl_acara'] ? date('d F Y', strtotime($p['tgl_acara'])) : '-' ?></p>
                        <p><strong>Lokasi :</strong> <?= esc($p['lokasi'] ?? '-') ?>
                            <?php if (!empty($p['lokasi'])): ?>
                            <a href="https://www.google.com/maps/search/<?= urlencode($p['lokasi']) ?>" target="_blank" class="btn-map-link"><i class="fa-solid fa-map-location-dot"></i></a>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="order-detail">
                        <?php
                        $classMap = [1 => 'pending', 2 => 'accepted', 3 => 'completed', 4 => 'rejected', 5 => 'canceled'];
                        $labelMap = [1 => 'Menunggu Disetujui', 2 => 'Diproses', 3 => 'Selesai', 4 => 'Ditolak', 5 => 'Dibatalkan'];
                        $s = $p['id_status'];
                        ?>
                        <span class="status <?= $classMap[$s] ?? 'pending' ?>">
                            <?= $labelMap[$s] ?? '-' ?>
                        </span>
                        <h4>Rp <?= number_format($p['total_harga'] ?? 0, 0, ',', '.') ?></h4>
                    </div>
                    <div class="order-action">
                        <?php if ($s == 2): ?>
                            <a href="<?= base_url('dashboard/bayar/'.$p['id_pemesanan']) ?>" class="btn-accept">Bayar Sekarang</a>
                        <?php endif; ?>
                        <?php if ($s == 1 || $s == 2 || $s == 3): ?>
                            <a href="<?= base_url('dashboard/pemesanan/batalkan/'.$p['id_pemesanan']) ?>" class="btn-cancel"><i class="fa-solid fa-ban"></i> Batalkan</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
<?php endif; ?>

<?= $this->endSection() ?>
