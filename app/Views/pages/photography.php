<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
    <div class="page-header">
        <h2>Manajemen Photography</h2>
        <p>Kelola kategori photography dan jenis photography yang tersedia pada sistem.</p>
    </div>
    <div class="stats-container">
        <div class="stats-card">
            <h3><?= $totalKategori ?></h3>
            <p>Kategori Photography</p>
        </div>
        <div class="stats-card">
            <h3><?= $totalJenis ?></h3>
            <p>Jenis Photography</p>
        </div>
        <div class="stats-card">
            <h3><?= $totalPhotografer ?></h3>
            <p>Photografer Aktif</p>
        </div>
        <div class="stats-card">
            <h3><?= $layananDigunakan ?></h3>
            <p>Layanan Digunakan</p>
        </div>
    </div>
    <div class="table-container">
        <div class="table-header">
            <h3>Data Kategori Photography</h3>
            <a href="<?= base_url('dashboard/tambahdatakategori') ?>" class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Kategori
            </a>
        </div>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        <tbody>
        <?php foreach ($kategori as $k): ?>
        <tr>
            <td>
                KTR<?= str_pad($k['id_kategori'], 3, '0', STR_PAD_LEFT); ?>
            </td>

            <td><?= esc($k['nama_kategori']); ?></td>

            <td><?= esc($k['deskripsi']); ?></td>

                <td class="action-buttons">

                    <a href="<?= base_url('dashboard/editkategori/'.$k['id_kategori']) ?>"
                        class="btn-edit">
                        <i class="fa-solid fa-pen"></i>
                        Edit
                    </a>

                    <a href="<?= base_url('dashboard/hapuskategori/'.$k['id_kategori']) ?>"
                        class="btn-delete"
                        onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                        <i class="fa-solid fa-trash"></i>
                        Hapus
                    </a>

                </td>

        </tr>

        <?php endforeach; ?>

        </tbody>

        </table>

    </div>
    <div class="table-container">

        <div class="table-header">
            <h3>Data Jenis Photography</h3>

            <a href="<?= base_url('dashboard/tambahdatajenis') ?>" class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Jenis
            </a>
        </div>

        <table class="user-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Nama Jenis</th>
                    <th>Harga Dasar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($jenis as $j): ?>

            <tr>

                <td>
                    JNS<?= str_pad($j['id_jenis_photography'], 3, '0', STR_PAD_LEFT); ?>
                </td>

                <td><?= esc($j['nama_kategori']); ?></td>

                <td><?= esc($j['nama_jenis']); ?></td>

                <td>
                    Rp <?= number_format($j['harga'], 0, ',', '.'); ?>
                </td>

                <td><?= esc($j['deskripsi']); ?></td>

                <td class="action-buttons">

                    <a href="<?= base_url('dashboard/editjenis/'.$j['id_jenis_photography']) ?>"
                        class="btn-edit">
                        <i class="fa-solid fa-pen"></i>
                        Edit
                    </a>

                    <a href="<?= base_url('dashboard/hapusjenis/'.$j['id_jenis_photography']) ?>"
                        class="btn-delete"
                        onclick="return confirm('Yakin ingin menghapus jenis photography ini?')">
                        <i class="fa-solid fa-trash"></i>
                        Hapus
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

    </div>
<?= $this->endSection() ?>