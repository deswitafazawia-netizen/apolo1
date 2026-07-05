<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<section class="booking-header">
    <h1>BOOKING PHOTOGRAPHER</h1>
    <p>
        Lengkapi informasi pemesanan untuk melakukan booking
        photographer pilihan Anda.
    </p>
</section>

<div class="booking-container">

    <div class="booking-form">

        <h2>Informasi Pemesanan</h2>

        <?php if(session()->getFlashdata('success')) : ?>
            <div class="alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div class="selected-photographer">
            <h3><?= esc($photografer['nama_photografer']); ?></h3>
        </div>

        <form action="<?= base_url('dashboard/booking/simpan') ?>" method="post">

            <?= csrf_field() ?>

            <input
                type="hidden"
                name="id_photografer"
                value="<?= $photografer['id_photografer']; ?>"
            >

            <div class="form-group">
                <label>Paket Photography</label>

                <input type="text"
                    value="<?= esc($paket['nama_jenis']); ?>"
                    readonly>

                <input type="hidden"
                    name="id_jenis_photography"
                    value="<?= $paket['id_jenis_photography']; ?>">
            </div>


            <div class="form-group">
                <label>Tanggal Acara</label>

                <input
                    type="date"
                    name="tgl_acara"
                    required
                >
            </div>

            <div class="form-group">
                <label>Lokasi Acara</label>

                <input
                    type="text"
                    name="lokasi"
                    placeholder="Masukkan lokasi acara"
                    required
                >
            </div>

            <div class="form-group">
                <label>Total Harga</label>

                <input type="text"
                    value="Rp <?= number_format($paket['harga'],0,',','.'); ?>"
                    readonly>

                <input type="hidden"
                    name="total_harga"
                    value="<?= $paket['harga']; ?>">
            </div>

            <button type="submit" class="btn-book-now">
                Konfirmasi Booking
            </button>

        </form>

    </div>

</div>

<?= $this->endSection() ?>