<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h1>Data Pemesanan</h1>
        <p>Kelola seluruh data pemesanan jasa photografer.</p>
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
    </div>
    <div class="table-container">

        <div class="table-header">
            <h2>Data Pemesanan</h2>
        </div>

        <div class="table-responsive">
            <table class="user-table">

                <thead>
                    <tr>
                        <th>ID Pemesanan</th>
                        <th>Pelanggan</th>
                        <th>Photografer</th>
                        <th>Jenis Photography</th>
                        <th>Tanggal Acara</th>
                        <th>Lokasi</th>
                        <th>Total Biaya</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                <?php if (!empty($pemesanan)): ?>
                    <?php foreach ($pemesanan as $p): ?>

                    <?php
                        $status = $p['id_status'];

                        $label = [
                            1 => ['text' => 'Menunggu Konfirmasi', 'class' => 'badge-pending'],
                            2 => ['text' => 'Diproses', 'class' => 'badge-process'],
                            3 => ['text' => 'Selesai', 'class' => 'badge-success'],
                        ];
                    ?>

                    <tr>
                        <td><?= esc($p['id_pemesanan']) ?></td>
                        <td><?= esc($p['nama_pelanggan']) ?></td>
                        <td><?= esc($p['nama_photografer']) ?></td>
                        <td><?= esc($p['nama_jenis']) ?></td>
                        <td><?= date('d F Y', strtotime($p['tgl_acara'])) ?></td>
                        <td><?= esc($p['lokasi']) ?></td>
                        <td>Rp <?= number_format($p['total_harga'], 0, ',', '.') ?></td>
                        <td>
                            <span class="<?= $label[$status]['class'] ?? 'badge-pending' ?>">
                                <?= $label[$status]['text'] ?? 'Unknown' ?>
                            </span>
                        </td>
                        <td>
                            <a href="<?= base_url('pemesanan/detail/' . $p['id_pemesanan']) ?>" class="btn-detail">Detail</a>

                            <?php if ($status == 1): ?>
                                <a href="<?= base_url('pemesanan/terima/' . $p['id_pemesanan']) ?>" class="btn-edit">Terima</a>
                                <a href="<?= base_url('pemesanan/tolak/' . $p['id_pemesanan']) ?>" class="btn-delete">Tolak</a>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                <?php else: ?>

                    <tr>
                        <td colspan="9" style="text-align:center;">Belum ada data pemesanan</td>
                    </tr>

                <?php endif; ?>

                </tbody>

            </table>
        </div>

    </div>
<?= $this->endSection() ?>