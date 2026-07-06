<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Tambah Portofolio</h2>
    <p>Unggah karya terbaru Anda ke portofolio.</p>
</div>

<div class="form-container">
    <form action="<?= base_url('dashboard/tambahportofolio/simpan') ?>"
        method="post"
        enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="upload-area" id="uploadArea">
            <i class="fa-solid fa-cloud-arrow-up"></i>
            <p>Klik untuk memilih foto</p>
            <span>Format: JPG, PNG. Maksimal 2MB</span>
            <input type="file" name="foto" id="fotoInput" accept="image/*" hidden>
            <img id="preview" class="preview-img" style="display:none">
        </div>

        <div class="form-group">
            <label>Jenis Photography</label>
            <div class="select-wrapper">
                <select name="id_jenis_photography" required>
                    <option value="">-- Pilih Jenis --</option>
                    <?php foreach ($jenis as $j): ?>
                        <option value="<?= $j['id_jenis_photography'] ?>">
                            <?= esc($j['nama_jenis']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>

        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" name="harga" placeholder="Masukkan harga" min="0">
        </div>

        <div class="form-group">
            <label>Deskripsi Karya</label>
            <textarea name="deskripsi" rows="5" placeholder="Ceritakan tentang karya ini..."></textarea>
        </div>

        <div class="form-action">
            <a href="<?= base_url('dashboard/profil') ?>" class="btn-cancel">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="btn-save">
                <i class="fa-solid fa-upload"></i> Unggah Portofolio
            </button>
        </div>

    </form>
</div>

<script>
const uploadArea = document.getElementById('uploadArea');
const fotoInput = document.getElementById('fotoInput');
const preview = document.getElementById('preview');

uploadArea.addEventListener('click', () => fotoInput.click());

fotoInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            uploadArea.classList.add('has-preview');
            uploadArea.querySelector('i').style.display = 'none';
            uploadArea.querySelector('p').textContent = file.name;
            uploadArea.querySelector('span').textContent = (file.size / 1024).toFixed(1) + ' KB';
        }
        reader.readAsDataURL(file);
    }
});
</script>

<?= $this->endSection() ?>
