<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<div class="portfolio-header">
    <div class="portfolio-profile">
        <img src="<?= base_url('uploads/profil/' . ($photografer['foto'] ?: 'default.png')) ?>" alt="Foto Profil">
        <div class="profile-info">
            <span>PHOTOGRAPHER PROFILE</span>
            <h1><?= esc($photografer['nama_photografer']) ?></h1>
            <div class="profile-stats">
                <div>
                    <h3>4.9</h3>
                    <p>Rating</p>
                </div>
            </div>
            <div class="profile-buttons">
                <a href="<?= base_url('dashboard/chat/'.$photografer['id_photografer']) ?>"
                class="btn-contact">
                    <i class="fa-solid fa-comments"></i>
                    Hubungi
                </a>
            </div>
        </div>
    </div>
</div>

<?php
$kategoriList = [];
foreach ($portofolio as $j) {
    $k = $j['nama_kategori'];
    if (!isset($kategoriList[$k])) {
        $kategoriList[$k] = $k;
    }
}
?>

<div class="portfolio-category" id="filterCategory">
    <button class="active" data-filter="all">Semua</button>
    <?php foreach ($kategoriList as $kategori) : ?>
    <button data-filter="<?= esc($kategori) ?>"><?= esc($kategori) ?></button>
    <?php endforeach; ?>
</div>

<div class="portfolio-gallery" id="portfolioGallery">
    <?php foreach ($portofolio as $j): ?>
    <div class="gallery-item" data-kategori="<?= esc($j['nama_kategori']) ?>">
        <img src="<?= base_url('uploads/portofolio/'.$j['foto']) ?>" alt="">
        <div class="overlay">
            <h3><?= esc($j['nama_jenis']) ?></h3>
            <p><?= esc($j['deskripsi']) ?></p>
            <h4>
                Rp <?= number_format($j['harga'], 3, ',', '.') ?>
            </h4>
            <a href="<?= base_url('dashboard/booking/'.$photografer['id_photografer'].'/'.$j['id_jenis_photography']) ?>"
            class="btn-booking">
                <i class="fa-solid fa-calendar-check"></i>
                Booking Sekarang
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script>
const filterButtons = document.querySelectorAll('#filterCategory button');
const galleryItems = document.querySelectorAll('#portfolioGallery .gallery-item');

filterButtons.forEach(btn => {
    btn.addEventListener('click', function() {
        filterButtons.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.dataset.filter;

        galleryItems.forEach(item => {
            if (filter === 'all' || item.dataset.kategori === filter) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>
<?= $this->endSection() ?>
