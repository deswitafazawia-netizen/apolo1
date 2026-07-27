<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="offer-container">

    <div class="offer-header">
        <span class="offer-badge">
            <i class="fa-solid fa-gavel"></i> Proyek Lelang
        </span>

        <h1>Ajukan Penawaran</h1>

        <p>
            Berikan penawaran terbaik Anda untuk memenangkan proyek ini.
        </p>
    </div>

    <div class="offer-card">

        <?php if(!empty($proyek)) : ?>

        <div class="project-detail-box">
            <div class="project-detail-header">
                <span class="project-tag">PROYEK LELANG</span>
                <span class="project-budget">Rp <?= number_format($proyek['budget'], 0, ',', '.'); ?></span>
            </div>

            <h2><?= $proyek['judul_proyek']; ?></h2>

            <div class="project-meta">
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    <?= $proyek['lokasi']; ?>
                </span>
                <span>
                    <i class="fa-solid fa-calendar"></i>
                    <?= date('d M Y', strtotime($proyek['tgl_acara'])); ?>
                </span>
                <span>
                    <i class="fa-solid fa-clock"></i>
                    Deadline: <?= date('d M Y', strtotime($proyek['deadline_penawaran'])); ?>
                </span>
            </div>

            <p><?= $proyek['deskripsi']; ?></p>

            <?php if(!empty($proyek['lampiran'])) : ?>
                <div style="margin-bottom:10px;">
                    <a href="<?= base_url('uploads/proyek/'.$proyek['lampiran']) ?>" target="_blank">
                        <i class="fa-solid fa-file"></i> Lihat Lampiran
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <?php endif; ?>

        <form action="<?= base_url('dashboard/penawaran/simpan') ?>" method="post">

            <input type="hidden" name="id_proyek" value="<?= $id_proyek ?>">

            <div class="form-group">
                <label>
                    <i class="fa-solid fa-money-bill-wave"></i>
                    Harga Penawaran
                </label>

                <input
                    type="number"
                    name="harga_penawaran"
                    placeholder="Contoh: 2500000"
                    required
                >
            </div>

            <div class="form-group">
                <label>
                    <i class="fa-solid fa-file-lines"></i>
                    Deskripsi Penawaran
                </label>

                <textarea
                    name="deskripsi_penawaran"
                    placeholder="Jelaskan pengalaman, konsep pemotretan, perlengkapan yang digunakan, dan alasan memilih Anda..."
                    required
                ></textarea>
            </div>

            <div class="btn-form-group">
                <button type="submit" class="btn-submit-offer">
                    <i class="fa-solid fa-paper-plane"></i>
                    Kirim Penawaran
                </button>
                <a href="<?= base_url('dashboard/proyeklelang') ?>" class="btn-cancel"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>

        </form>

    </div>

</div>

<?= $this->endSection() ?>