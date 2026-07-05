<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Edit Data Jenis Photography</h2>
    <p>Perbarui data jenis photography.</p>
</div>

<div class="form-container">

    <form action="<?= base_url('dashboard/updatejenis/'.$jenis['id_jenis_photography']) ?>" method="post">

        <?= csrf_field() ?>

        <div class="form-grid">

            <div class="form-group">
                <label>Kategori Photography</label>

                <select name="id_kategori" required>

                    <option value="">-- Pilih Kategori --</option>

                    <?php foreach($kategori as $k): ?>

                        <option
                            value="<?= $k['id_kategori'] ?>"
                            <?= ($k['id_kategori'] == $jenis['id_kategori']) ? 'selected' : '' ?>>

                            <?= esc($k['nama_kategori']) ?>

                        </option>

                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-group">
                <label>Nama Jenis Photography</label>

                <input
                    type="text"
                    name="nama_jenis"
                    value="<?= esc($jenis['nama_jenis']) ?>"
                    required>
            </div>

            <div class="form-group">
                <label>Harga</label>

                <input
                    type="number"
                    name="harga"
                    value="<?= $jenis['harga'] ?>"
                    required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    required><?= esc($jenis['deskripsi']) ?></textarea>
            </div>

        </div>

        <div class="form-action">

            <a href="<?= base_url('dashboard/photography') ?>" class="btn-cancel">
                Kembali
            </a>

            <button type="submit" class="btn-save">
                <i class="fa-solid fa-floppy-disk"></i>
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

<?= $this->endSection() ?>