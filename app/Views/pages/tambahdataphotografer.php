<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Tambah Data Photografer</h2>
    <p>Tambahkan data pelanggan baru ke dalam sistem.</p>
</div>

<div class="form-container">

    <form action="<?= base_url('dashboard/tambahdataphotografer/simpan') ?>" method="post">

        <div class="form-grid">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_photografer" placeholder="Masukkan Nama Lengkap">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan Email">
            </div>

            <div class="form-group">
                <label>No Handphone</label>
                <input type="text" name="no_hp" placeholder="08xxxxxxxxxx">
            </div>


            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan Password">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat">
            </div>

            <div class="form-group">
                <label>Status</label>

                <select name="id_status">

                    <option value="1">Aktif</option>

                    <option value="2">Nonaktif</option>

                </select>
            </div>

        </div>

        <div class="form-action">

            <a href="<?= base_url('/dashboard/pengguna') ?>" class="btn-cancel">
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