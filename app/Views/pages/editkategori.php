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

    <button type="submit" class="btn-save">
        Simpan Perubahan
    </button>

</form>

</div>

<?= $this->endSection() ?>