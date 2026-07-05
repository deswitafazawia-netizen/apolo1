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

        <div class="project-info">
            <div class="info-item">
                <small>ID PROYEK</small>
                <h3>#<?= $id_proyek ?></h3>
            </div>

            <div class="info-item">
                <small>STATUS</small>
                <span class="status-open">OPEN</span>
            </div>
        </div>

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

            <button type="submit" class="btn-submit-offer">
                <i class="fa-solid fa-paper-plane"></i>
                Kirim Penawaran
            </button>

        </form>

    </div>

</div>

<?= $this->endSection() ?>