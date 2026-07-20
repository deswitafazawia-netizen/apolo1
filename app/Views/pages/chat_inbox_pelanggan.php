<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2>Pesan</h2>
    <p>Daftar percakapan dengan photografer</p>
</div>

<div class="inbox-container">
    <?php if (!empty($conversations)) : ?>
        <?php foreach ($conversations as $conv) : ?>
        <a href="<?= base_url('dashboard/chat/' . $conv['id_photografer']) ?>" class="inbox-card">
            <img src="<?= base_url('uploads/profil/' . ($conv['foto_photografer'] ?: 'default.png')) ?>" alt="">
            <div class="inbox-info">
                <h4><?= esc($conv['nama_photografer']) ?></h4>
                <p><?= esc(substr($conv['last_message'], 0, 60)) ?></p>
            </div>
            <span class="inbox-time"><?= date('d M H:i', strtotime($conv['last_time'])) ?></span>
        </a>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="empty-data">
            <i class="fa-solid fa-inbox"></i>
            <p>Belum ada percakapan</p>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
