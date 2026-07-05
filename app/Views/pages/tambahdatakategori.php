<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Tambah Data Kategori</h2>
    <p>Tambahkan data kategori photography baru.</p>
</div>

<div class="form-container">

    <form action="<?= base_url('dashboard/tambahdatakategori/simpan') ?>" method="post">

        <?= csrf_field(); ?>

        <div class="form-grid">

            <div class="form-group">
                <label>Nama Kategori</label>
                <input
                    type="text"
                    name="nama_kategori"
                    placeholder="Contoh: Wedding"
                    required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea
                    name="deskripsi"
                    placeholder="Masukkan deskripsi kategori"
                    required></textarea>
            </div>

        </div>

        <div class="form-action">

            <a href="<?= base_url('dashboard/photography') ?>" class="btn-cancel">
                Kembali
            </a>

            <button type="submit" class="btn-save">
                <i class="fa-solid fa-floppy-disk"></i>
                Simpan Data
            </button>

        </div>

    </form>

</div>

<?= $this->endSection() ?>