<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h2>Manajemen Pengguna</h2>
        <p>Kelola seluruh data pelanggan dan photografer yang terdaftar pada sistem.</p>
    </div>
    <div class="stats-container">
        <div class="stats-card">
            <h3><?= $totalPengguna; ?></h3>
            <p>Total Pengguna</p>
        </div>

        <div class="stats-card">
            <h3><?= $totalPelanggan; ?></h3>
            <p>Pelanggan</p>
        </div>

        <div class="stats-card">
            <h3><?= $totalPhotografer; ?></h3>
            <p>Photografer</p>
        </div>

        <div class="stats-card">
            <h3><?= $akunAktif; ?></h3>
            <p>Akun Aktif</p>
        </div>
    </div>
<div class="filter-section">

    <a href="<?= base_url('dashboard/pengguna') ?>" class="filter-btn">
        Pelanggan
    </a>

    <a href="<?= base_url('dashboard/tabelphotografer') ?>" class="filter-btn active">
        Photografer
    </a>

</div>
<div class="table-container photographer-table">
        <div class="table-header">
            <h3>Data Photografer</h3>
            <a href="<?= base_url('dashboard/tambahdataphotografer') ?>" class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Photografer
            </a>
        </div>
    <table class="user-table">
        <thead>
            <tr>
                <th>ID Photografer</th>
                <th>Nama Photografer</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <tbody>

            <?php if(!empty($photografer)): ?>

                <?php foreach($photografer as $p): ?>

                <tr>

                    <td>
                        PHG<?= str_pad($p['id_photografer'],3,'0',STR_PAD_LEFT); ?>
                    </td>

                    <td><?= esc($p['nama_photografer']); ?></td>

                    <td><?= esc($p['email']); ?></td>

                    <td><?= esc($p['no_hp']); ?></td>

                    <td><?= esc($p['alamat']); ?></td>

                    <td>

                        <?php if($p['id_status']==1): ?>

                            <span class="status-badge active">
                                Aktif
                            </span>

                        <?php else: ?>

                            <span class="status-badge inactive">
                                Nonaktif
                            </span>

                        <?php endif; ?>

                    </td>

                    <td>

                        <a href="<?= base_url('dashboard/detailphotografer/'.$p['id_photografer']); ?>"
                        class="btn-detail">
                            Detail
                        </a>

                    </td>

                </tr>

                <?php endforeach; ?>

            <?php else: ?>

            <tr>
                <td colspan="7" style="text-align:center;">
                    Belum ada data photografer.
                </td>
            </tr>

            <?php endif; ?>

            </tbody>
    </table>

</div>
<?= $this->endSection() ?>