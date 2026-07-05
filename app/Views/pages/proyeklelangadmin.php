<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h2>Manajemen Proyek Lelang</h2>
        <p>Kelola seluruh data proyek lelang yang dibuat oleh pelanggan.</p>
    </div>
    <div class="stats-container">
        <div class="stats-card">
            <h3><?= $totalProyek ?></h3>
            <p>Total Proyek</p>
        </div>

        <div class="stats-card">
            <h3><?= $proyekAktif ?></h3>
            <p>Proyek Aktif</p>
        </div>

        <div class="stats-card">
            <h3><?= $proyekSelesai ?></h3>
            <p>Proyek Selesai</p>
        </div>

        <div class="stats-card">
            <h3><?= $proyekDitutup ?></h3>
            <p>Proyek Ditutup</p>
        </div>
    </div>
    <div class="table-container">

        <div class="table-header">
            <h3>Data Proyek Lelang</h3>

            <a href="<?= base_url('dashboard/tambahdataproyeklelang') ?>" class="btn-add">
                <i class="fa-solid fa-plus"></i>
                Tambah Data Proyek Lelang
            </a>
        </div>

        <table class="user-table">

            <thead>
                <tr>
                    <th>ID</th>

                    <th>Judul Proyek</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Acara</th>
                    <th>Lokasi</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

        <tbody>

        <?php if(!empty($proyek)): ?>

        <?php foreach($proyek as $p): ?>

        <tr>

            <td>
                PRJ<?= str_pad($p['id_proyek'],3,'0',STR_PAD_LEFT); ?>
            </td>

            <td><?= esc($p['judul_proyek']) ?></td>

            <td><?= esc($p['nama_pelanggan']) ?></td>

            <td>
                <?= date('d-m-Y',strtotime($p['tgl_acara'])) ?>
            </td>

            <td><?= esc($p['lokasi']) ?></td>

            <td>
                Rp <?= number_format($p['budget'],0,',','.') ?>
            </td>

            <td>

                <?php if($p['id_status']==1): ?>

                    <span class="badge badge-active">
                        Aktif
                    </span>

                <?php elseif($p['id_status']==2): ?>

                    <span class="badge badge-complete">
                        Selesai
                    </span>

                <?php else: ?>

                    <span class="badge badge-closed">
                        Ditutup
                    </span>

                <?php endif; ?>

            </td>

            <td>

                <a href="<?= base_url('dashboard/proyek/detail/'.$p['id_proyek']) ?>"
                class="btn-detail">
                    Detail
                </a>

                <a href="<?= base_url('dashboard/proyek/hapus/'.$p['id_proyek']) ?>"
                class="btn-delete"
                onclick="return confirm('Yakin ingin menghapus proyek ini?')">
                    Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

        <?php else: ?>

        <tr>

            <td colspan="8" style="text-align:center">
                Belum ada data proyek lelang.
            </td>

        </tr>

        <?php endif; ?>

        </tbody>

        </table>

    </div>
<?= $this->endSection() ?>