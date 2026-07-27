<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Tambah Data Proyek Lelang</h2>
    <p>Tambahkan data proyek lelang baru ke dalam sistem.</p>
</div>

<div class="form-container">

        <form action="<?= base_url('dashboard/tambahdataproyeklelang/simpan') ?>" method="post">

        <?= csrf_field(); ?>

        <div class="form-grid">

            <div class="form-group">
                <label>Judul Proyek</label>
                <input type="text" name="judul_proyek" required>
            </div>

            <div class="form-group">
                <label>Pelanggan</label>

                <select name="id_pelanggan" required>

                    <option value="">Pilih Pelanggan</option>

                    <?php foreach($pelanggan as $p): ?>

                        <option value="<?= $p['id_pelanggan']; ?>">
                            <?= $p['nama_pelanggan']; ?>
                        </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">
                <label>Tanggal Acara</label>
                <input type="date" name="tgl_acara" required>
            </div>

            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" required>
            </div>

            <div class="form-group">
                <label>Budget</label>
                <input type="number" name="budget" required>
            </div>

            <div class="form-group">
                <label>Deadline Penawaran</label>
                <input type="date" name="deadline_penawaran" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>

                <select name="id_status">

                    <option value="1">Aktif</option>
                    <option value="2">Selesai</option>
                    <option value="3">Ditutup</option>

                </select>

            </div>
            <div class="btn-form-group">
                <button type="submit" class="btn-save">
                    <i class="fa-solid fa-save"></i>
                    Simpan Data
                </button>
                <a href="<?= base_url('dashboard/proyeklelang') ?>" class="btn-cancel"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

</div>

<?= $this->endSection() ?>