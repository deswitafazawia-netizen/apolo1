<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2>Profil Saya</h2>
    <p>Kelola informasi akun Anda.</p>
</div>

<div class="profile-layout">
    <div class="profile-left">
        <form action="<?= base_url('dashboard/profil/update') ?>" method="post" enctype="multipart/form-data">
            <div class="profile-card">
                <div class="profile-card-header">
                    <h3><i class="fa-solid fa-user"></i> Informasi Akun</h3>
                </div>
                <div class="profile-card-body">
                    <div class="avatar-upload">
                        <?php if (!empty($user['foto'])): ?>
                            <img src="<?= base_url('uploads/profil/'.$user['foto']) ?>" class="avatar-preview">
                        <?php else: ?>
                            <div class="avatar-placeholder">
                                <i class="fa-solid fa-camera"></i>
                            </div>
                        <?php endif; ?>
                        <label class="avatar-label">
                            <i class="fa-solid fa-upload"></i> Ganti Foto
                            <input type="file" name="foto" hidden>
                        </label>
                    </div>

                    <?php if ($role === 'photografer'): ?>
                        <div class="form-group">
                            <label>Nama Photografer</label>
                            <input type="text" name="nama_photografer" value="<?= esc($user['nama_photografer'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= esc($user['email'] ?? '') ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" value="<?= esc($user['no_hp'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" name="password" placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat"><?= esc($user['alamat'] ?? '') ?></textarea>
                        </div>

                    <?php elseif ($role === 'pelanggan'): ?>
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" value="<?= esc($user['nama_pelanggan'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= esc($user['email'] ?? '') ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" value="<?= esc($user['no_hp'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" name="password" placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>

                    <?php elseif ($role === 'admin'): ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?= esc($user['username'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" name="password" placeholder="Kosongkan jika tidak diubah">
                        </div>
                    <?php endif; ?>

                    <div class="btn-form-group">
                        <button class="btn-save">
                            <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
                        </button>
                        <a href="<?= base_url('dashboard') ?>" class="btn-cancel"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php if ($role === 'photografer'): ?>
    <div class="profile-right">
        <div class="profile-card">
            <div class="profile-card-header">
                <h3><i class="fa-solid fa-images"></i> Portofolio</h3>
                <a href="<?= base_url('dashboard/tambahportofolio') ?>" class="btn-add">
                    <i class="fa-solid fa-plus"></i> Tambah
                </a>
            </div>
            <div class="profile-card-body">
                <?php if (!empty($portofolio)): ?>
                    <div class="portfolio-grid">
                        <?php foreach ($portofolio as $p): ?>
                            <div class="portfolio-item">
                                <div class="portfolio-img">
                                    <img src="<?= base_url('uploads/portofolio/'.$p['foto']) ?>" alt="">
                                    <div class="portfolio-overlay">
                                        <a href="<?= base_url('dashboard/editportofolio/'.$p['id_portofolio']) ?>" class="btn-icon btn-edit-icon"><i class="fa-solid fa-pen"></i></a>
                                        <a href="<?= base_url('dashboard/hapusportofolio/'.$p['id_portofolio']) ?>" class="btn-icon btn-delete-icon" onclick="return confirm('Yakin ingin menghapus portofolio ini?')"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <p><?= esc($p['deskripsi']) ?></p>
                                    <?php if (!empty($p['harga'])): ?>
                                        <span class="portfolio-price">Rp <?= number_format($p['harga'], 0, ',', '.') ?></span>
                                    <?php endif; ?>
                                    <span><?= date('d M Y', strtotime($p['tgl_upload'])) ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="empty-data">
                        <i class="fa-solid fa-image"></i>
                        <p>Belum ada portofolio yang diunggah.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
