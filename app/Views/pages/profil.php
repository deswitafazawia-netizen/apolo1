<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2>Profil Photografer</h2>
    <p>Kelola informasi akun dan portofolio Anda.</p>
</div>

<div class="profile-wrapper">

    <div class="profile-left">

        <form action="<?= base_url('dashboard/profil/update') ?>" method="post" enctype="multipart/form-data">

        <?php if(!empty($fotoProfil)): ?>

        <img src="<?= base_url('uploads/portofolio/'.$fotoProfil['foto']) ?>">

        <?php else: ?>

        <img src="<?= base_url('assets/default.png') ?>">

        <?php endif; ?>

            </div>

            <div class="form-group">
                <label>Nama Photografer</label>
                <input
                    type="text"
                    name="nama_photografer"
                    value="<?= esc($photografer['nama_photografer']) ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="<?= esc($photografer['email']) ?>">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input
                    type="text"
                    name="no_hp"
                    value="<?= esc($photografer['no_hp']) ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat"><?= esc($photografer['alamat']) ?></textarea>
            </div>

            <div class="form-group">
                <label>Password Baru</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Kosongkan jika tidak diubah">
            </div>

            <button class="btn-save">
                Simpan Perubahan
            </button>

        </form>

    </div>

        <div class="profile-right">

            <div class="portfolio-header">
                <h3>Portofolio Saya</h3>

                <a href="<?= base_url('dashboard/editportofolio/'.$p['id_portofolio']) ?>">
                    Edit
                </a>
            </div>

            <?php if(!empty($portofolio)): ?>

                <?php foreach($portofolio as $p): ?>

                    <div class="portfolio-card">

                        <img src="<?= base_url('uploads/portofolio/'.$p['foto']) ?>" alt="">

                        <div class="portfolio-info">

                            <h4>Portofolio</h4>

                            <p><?= esc($p['deskripsi']) ?></p>

                            <small>
                                Upload :
                                <?= date('d M Y', strtotime($p['tgl_upload'])) ?>
                            </small>

                        </div>

                        <div class="portfolio-action">

                            <a href="<?= base_url('dashboard/editportofolio/'.$p['id_portofolio']) ?>"
                                class="btn-edit">
                                <i class="fa-solid fa-pen"></i> Edit
                            </a>

                            <a href="<?= base_url('dashboard/hapusportofolio/'.$p['id_portofolio']) ?>"
                                class="btn-delete"
                                onclick="return confirm('Yakin ingin menghapus portofolio ini?')">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <div class="empty-data">
                    <i class="fa-solid fa-image"></i>
                    <p>Belum ada portofolio yang diunggah.</p>
                </div>

            <?php endif; ?>

        </div>

</div>

<?= $this->endSection() ?>