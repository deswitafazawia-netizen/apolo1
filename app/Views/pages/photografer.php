<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="photographer-wrapper">
        <div class="filter-sidebar">
            <h2>Filters</h2>
            <div class="filter-group">
                <h4>KATEGORI</h4>
                <?php foreach ($kategori as $k): ?>
                <label>
                    <input type="checkbox" class="filter-kategori" value="<?= esc($k['nama_kategori']) ?>">
                    <?= esc($k['nama_kategori']) ?>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="filter-group">
                <h4>MINIMUM RATING</h4>
                <div class="rating-filter" id="ratingFilter">
                    <span class="star-option" data-value="0">Semua</span>
                    <span class="star-option" data-value="4">4+ ⭐</span>
                    <span class="star-option" data-value="3">3+ ⭐</span>
                    <span class="star-option" data-value="2">2+ ⭐</span>
                    <span class="star-option" data-value="1">1+ ⭐</span>
                </div>
            </div>
            <div class="filter-group">
                <h4>CARI</h4>
                <input type="text" id="searchPhotografer" placeholder="Cari nama photografer..." style="width:100%;padding:10px 12px;background:#222;border:1px solid #333;border-radius:10px;color:#fff;">
            </div>
            <button class="btn-clear" onclick="resetFilter()">CLEAR ALL</button>
        </div>
        <div class="photographer-content">
            <div class="content-header">
                <div>
                    <h1>The Photografer</h1>
                    <p>Temukan photografer terbaik sesuai kebutuhan Anda.</p>
                </div>
            </div>
            <div class="photographer-grid" id="photograferGrid">
                <?php foreach ($photografer as $p): ?>
                <div class="photographer-card" 
                     data-nama="<?= strtolower(esc($p['nama_photografer'])) ?>"
                     data-rating="<?= (float)$p['nilai_rating'] ?>"
                     data-kategori="<?= implode(',', array_map('strtolower', $p['kategori'])) ?>">
                    <div class="card-image">
                        <img src="<?= base_url('uploads/profil/' . ($p['foto'] ?? 'default.png')) ?>" alt="foto_profil">
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3><?= esc($p['nama_photografer'])?></h3>
                            <span>⭐ <?= number_format((float)$p['nilai_rating'], 1) ?></span>
                        </div>
                        <div class="card-kategori">
                            <?php foreach ($p['kategori'] as $k): ?>
                                <span class="kategori-tag"><?= esc($k) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-buttons">
                            <a href="<?= base_url('dashboard/portofolio/'.$p['id_photografer']) ?>" class="btn-portfolio">
                                View Portofolio
                            </a> 
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<script>
let selectedKategori = [];
let minRating = 0;

document.querySelectorAll('.filter-kategori').forEach(cb => {
    cb.addEventListener('change', function() {
        if (this.checked) {
            selectedKategori.push(this.value.toLowerCase());
        } else {
            selectedKategori = selectedKategori.filter(k => k !== this.value.toLowerCase());
        }
        applyFilter();
    });
});

document.querySelectorAll('.star-option').forEach(el => {
    el.addEventListener('click', function() {
        document.querySelectorAll('.star-option').forEach(s => s.classList.remove('active'));
        this.classList.add('active');
        minRating = parseFloat(this.dataset.value);
        applyFilter();
    });
});
document.querySelector('.star-option[data-value="0"]').classList.add('active');

document.getElementById('searchPhotografer').addEventListener('input', applyFilter);

function applyFilter() {
    const search = document.getElementById('searchPhotografer').value.toLowerCase();
    document.querySelectorAll('.photographer-card').forEach(card => {
        const nama = card.dataset.nama;
        const rating = parseFloat(card.dataset.rating);
        const kategori = card.dataset.kategori;

        const matchSearch = !search || nama.includes(search);
        const matchRating = rating >= minRating;
        const matchKategori = selectedKategori.length === 0 || selectedKategori.some(k => kategori.includes(k));

        card.style.display = (matchSearch && matchRating && matchKategori) ? '' : 'none';
    });
}

function resetFilter() {
    document.querySelectorAll('.filter-kategori').forEach(cb => cb.checked = false);
    selectedKategori = [];
    minRating = 0;
    document.querySelectorAll('.star-option').forEach(s => s.classList.remove('active'));
    document.querySelector('.star-option[data-value="0"]').classList.add('active');
    document.getElementById('searchPhotografer').value = '';
    applyFilter();
}
</script>
<?= $this->endSection() ?>
