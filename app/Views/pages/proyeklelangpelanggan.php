<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="container">

    <div class="upload-project">
    <div class="section-header">
        <h2>Upload Proyek Lelang</h2>
        <p>Buat proyek photography dan dapatkan penawaran terbaik dari photografer profesional.</p>
    </div>

    <form action="<?= base_url('dashboard/proyeklelangpelanggan/simpan') ?>"method="post"  enctype="multipart/form-data">

        <div class="form-group">
            <label>Judul Proyek</label>
            <input type="text" name="judul_proyek" placeholder="Contoh: Wedding Outdoor Surabaya">
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Tanggal Acara</label>
                <input type="date" name="tgl_acara">
            </div>

            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" placeholder="Masukkan lokasi acara">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Budget</label>
                <input type="number" name="budget" placeholder="Rp 5.000.000">
            </div>

            <div class="form-group">
                <label>Deadline Penawaran</label>
                <input type="date" name="deadline_penawaran">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Deskripsi Proyek</label>
                <textarea name="deskripsi" placeholder="Jelaskan kebutuhan photography Anda secara detail..."></textarea>
            </div>

            <div class="form-group">
                <label>Lampiran Referensi</label>
                <input type="file" name="lampiran" class="file-upload">
            </div>
        </div>

        <div class="btn-form-group">
            <button type="submit" class="publish-btn">
                <i class="fa-solid fa-paper-plane"></i>
                Publish Project
            </button>
        </div>

    </form>
</div>
<div class="published-project">

    <?php if(!empty($proyek)) : ?>

        <?php foreach($proyek as $p) : ?>

        <div class="project-card">

            <div class="project-top">

            <span class="status <?= $p['id_status'] == 7 ? 'active' : 'closed' ?>">
                            <?php
            switch ($p['id_status']) {
                case 7:
                    echo '<span class="status active">Proyek Aktif</span>';
                    break;

                case 8:
                    echo '<span class="status closed">Proyek Ditutup</span>';
                    break;

                default:
                    echo '<span class="status">Status Tidak Diketahui (' . $p['id_status'] . ')</span>';
            }
            ?>
            </span>
            </div>

            <h3><?= $p['judul_proyek']; ?></h3>

            <span>
                    <i class="fa-solid fa-calendar"></i>
                    <?= date('d M Y', strtotime($p['tgl_acara'])); ?>
            </span>

            <p class="project-desc">
                <?= $p['deskripsi']; ?>
            </p>

            <div class="project-meta">
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    <?= $p['lokasi']; ?>
                </span>

            </div>

            <div class="project-budget">
                <small>Budget</small>
                <h4>
                    Rp <?= number_format($p['budget'],0,',','.'); ?>
                </h4>
            </div>

            <?php if(!empty($p['lampiran'])) : ?>
                <div style="margin-top:15px;">
                    <a href="<?= base_url('uploads/proyek/'.$p['lampiran']); ?>" target="_blank">
                        Lihat Lampiran
                    </a>
                </div>
            <?php endif; ?>

            <div class="project-actions">
                <a href="<?= base_url('dashboard/penawaranpelanggan/'.$p['id_proyek']) ?>" class="btn-penawaran"> 
                    Penawaran
                </a>

                <a href="<?= base_url('dashboard/proyeklelangpelanggan/tutup/'.$p['id_proyek']) ?>"
                class="btn-close"
                onclick="return confirm('Yakin ingin menutup proyek ini?')">
                    Tutup
                </a>
            </div>

        </div>

        <?php endforeach; ?>

    <?php else : ?>

        <div class="project-card">
            <h3>Belum Ada Proyek</h3>
            <p>Silakan upload proyek pertama Anda.</p>
        </div>

    <?php endif; ?>

</div>
<?= $this->endSection() ?>