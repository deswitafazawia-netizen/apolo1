<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>
    <div class="photographer-wrapper">

        <div class="filter-sidebar">

            <h2>Filters</h2>

            <div class="filter-group">
                <h4>CATEGORY</h4>

                <label>
                    <input type="checkbox">
                    Wedding
                </label>

                <label>
                    <input type="checkbox">
                    Portrait
                </label>

                <label>
                    <input type="checkbox">
                    Event
                </label>

                <label>
                    <input type="checkbox">
                    Prewedding
                </label>

                <label>
                    <input type="checkbox">
                    Wisuda
                </label>
            </div>

            <div class="filter-group">
                <h4>PRICE RANGE</h4>

                <div class="price-range">
                    <span>Rp100.000</span>
                    <span>Rp5.000.000+</span>
                </div>

                <input type="range">
            </div>

            <div class="filter-group">
                <h4>MINIMUM RATING</h4>

                <div class="rating-filter">
                    ⭐⭐⭐⭐⭐
                </div>
            </div>

            <button class="btn-clear">
                CLEAR ALL
            </button>

        </div>

        <div class="photographer-content">

            <div class="content-header">
                <div>
                    <h1>The Photografer</h1>
                    <p>Temukan photografer terbaik sesuai kebutuhan Anda.</p>
                </div>
            </div>

        <div class="photographer-grid">
            <?php foreach($photografi as $p): ?>
                <div class="photographer-card">
                    <div class="card-image">
                        <img src="<?= base_url('assets/'. ($p['foto'] ?? 'default.png')) ?>" alt="foto_profil">
                    </div>

                    <div class="card-body">
                        <div class="card-title">
                            <h3><?= esc($p['nama_photografer'] )?></h3>
                            <span>⭐ <?= esc($p['nilai_rating']) ?></span>
                        </div>

                        <p>
                            <?= esc($p['deskripsi']) ?>
                        </p>

                        <div class="card-buttons">
                        <a href="<?= base_url('dashboard/portofolioichall/'.$p['id_photografer']) ?> " class="btn-portfolio">
                            View Portofolio
                        </a> 
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?= $this->endSection() ?>