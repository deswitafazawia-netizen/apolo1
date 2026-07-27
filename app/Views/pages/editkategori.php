<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Edit Kategori Photography</h2>
</div>

<div class="form-container">

<form action="<?= base_url('dashboard/updatekategori/'.$kategori['id_kategori']) ?>" method="post">

    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text"
               name="nama_kategori"
               value="<?= esc($kategori['nama_kategori']) ?>">
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi"><?= esc($kategori['deskripsi']) ?></textarea>
    </div>

    <div class="btn-form-group">
        <button type="submit" class="btn-save">
            Simpan Perubahan
        </button>
        <a href="<?= base_url('dashboard/photography') ?>" class="btn-cancel"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
    </div>

</form>

</div>

<?= $this->endSection() ?>