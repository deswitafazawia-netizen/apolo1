<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="auction-header">
    <div>
        <span class="section-label">OPEN PROJECTS</span>
        <h1>Proyek Lelang</h1>
    </div>

    <div class="sort-box">
        <span>SORT BY :</span>
        <select>
            <option>Latest Project</option>
            <option>Highest Budget</option>
            <option>Nearest Event</option>
        </select>
    </div>
</div>

<div class="auction-grid">

    <?php if(!empty($proyek)) : ?>

        <?php foreach($proyek as $p) : ?>

        <div class="auction-card">

            <div class="auction-card-top">

                <span class="project-tag">
                    PROYEK
                </span>

                <span class="project-budget">
                    Rp <?= number_format($p['budget'],0,',','.'); ?>
                </span>

            </div>

            <h2><?= $p['judul_proyek']; ?></h2>

            <div class="project-meta">

                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    <?= $p['lokasi']; ?>
                </span>

                <span>
                    <i class="fa-solid fa-calendar"></i>
                    <?= date('d M Y', strtotime($p['tgl_acara'])); ?>
                </span>

            </div>

            <p>
                <?= $p['deskripsi']; ?>
            </p>

            <?php if(!empty($p['lampiran'])) : ?>
                <div style="margin-bottom:15px;">
                    <a href="<?= base_url('uploads/proyek/'.$p['lampiran']) ?>"
                       target="_blank">
                        <i class="fa-solid fa-file"></i>
                        Lihat Lampiran
                    </a>
                </div>
            <?php endif; ?>

            <div class="project-footer">

                <div>
                    <small>STATUS</small>
                    <h4>
                        <?= ($p['id_status'] == 1) ? 'Aktif' : 'Ditutup'; ?>
                    </h4>
                </div>

                <a href="<?= base_url('dashboard/penawaran/'.$p['id_proyek']); ?>"
                class="btn-bid">
                AJUKAN PENAWARAN
                </a>

            </div>

        </div>

        <?php endforeach; ?>

    <?php else : ?>

        <div class="auction-card">
            <h2>Belum Ada Proyek</h2>
            <p>Tidak ada proyek lelang yang tersedia saat ini.</p>
        </div>

    <?php endif; ?>

</div>

<?= $this->endSection() ?>