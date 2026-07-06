<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="page-header">
        <h2>Edit Portofolio</h2>
    </div>
    <div class="form-container">
        <form action="<?= base_url('dashboard/updateportofolio/'.$portofolio['id_portofolio']) ?>"
            method="post"
            enctype="multipart/form-data">
        <?= csrf_field() ?>
            <div class="form-group">
                <label>Foto Saat Ini</label>
                <img src="<?= base_url('uploads/portofolio/'.$portofolio['foto']) ?>"width="250">
            </div>
                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input type="file" name="foto">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>

                    <textarea name="deskripsi" rows="6"><?= esc($portofolio['deskripsi']) ?></textarea>
                </div>
        <button class="btn-save">
            Simpan Perubahan
        </button>
        </form>
<?= $this->endSection() ?>