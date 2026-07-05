<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Tambah Data Jenis Photography</h2>
    <p>Tambahkan data jenis photography baru.</p>
</div>

<div class="form-container">

    <form action="<?= base_url('dashboard/tambahdatajenis/simpan') ?>" method="post">

        <?= csrf_field(); ?>

        <div class="form-grid">

            <div class="form-group">
                <label>Photografer</label>

                <select name="id_photografer" required>

                    <option value="">Pilih Photografer</option>

                    <?php foreach($photografer as $p): ?>

                        <option value="<?= $p['id_photografer']; ?>">
                            <?= $p['nama_photografer']; ?>
                        </option>

                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-group">
                <label>Kategori</label>

                <select name="id_kategori" required>

                    <option value="">Pilih Kategori</option>

                    <?php foreach($kategori as $k): ?>

                        <option value="<?= $k['id_kategori']; ?>">
                            <?= $k['nama_kategori']; ?>
                        </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">
                <label>Nama Jenis</label>

                <input
                    type="text"
                    name="nama_jenis"
                    placeholder="Wedding Gold Package"
                    required>

            </div>

            <div class="form-group">
                <label>Harga</label>

            <input type="number"
                name="harga"
                step="1"
                min="0"
                value="<?= old('harga') ?>">

            </div>

            <div class="form-group">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    placeholder="Masukkan deskripsi"
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