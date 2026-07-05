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

    <a href="<?= base_url('dashboard/pengguna') ?>" class="filter-btn active">
        Pelanggan
    </a>

    <a href="<?= base_url('dashboard/tabelphotografer') ?>" class="filter-btn">
        Photografer
    </a>

</div>
    <div class="table-container">
        <div class="table-header">
            <h3>Data Pelanggan</h3>

            <a href="<?= base_url('dashboard/tambahdatapelanggan') ?>" class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Pelanggan
            </a>
        </div>
    <table class="user-table">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <tbody>

            <?php if(!empty($pelanggan)): ?>

                <?php foreach($pelanggan as $p): ?>

                <tr>

                    <td>
                        PLG<?= str_pad($p['id_pelanggan'],3,'0',STR_PAD_LEFT); ?>
                    </td>

                    <td><?= esc($p['nama_pelanggan']); ?></td>

                    <td><?= esc($p['email']); ?></td>

                    <td><?= esc($p['no_hp']); ?></td>

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

                <td class="action-buttons">

                    <a href="<?= base_url('dashboard/detailpelanggan/'.$p['id_pelanggan']) ?>"
                    class="btn-detail">
                        <i class="fa-solid fa-eye"></i> Detail
                    </a>

                    <a href="<?= base_url('dashboard/pengguna/edit/'.$p['id_pelanggan']) ?>"
                    class="btn-edit">
                        <i class="fa-solid fa-pen"></i> Edit
                    </a>

                    <a href="<?= base_url('dashboard/pengguna/hapus/'.$p['id_pelanggan']) ?>"
                    class="btn-delete"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                        <i class="fa-solid fa-trash"></i> Hapus
                    </a>

                </td>

                </tr>

                <?php endforeach; ?>

            <?php else: ?>

            <tr>

                <td colspan="6" style="text-align:center">
                    Belum ada data pelanggan.
                </td>

            </tr>

            <?php endif; ?>

            </tbody>
    </table>
    </div>
<?= $this->endSection() ?>