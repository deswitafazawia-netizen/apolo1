<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="chat-container">

    <div class="chat-header">
        <h3><?= esc($photografer['nama_photografer']) ?></h3>
    </div>

    <div class="chat-body">

        <!-- nanti foreach pesan -->

    </div>

    <form action="<?= base_url('dashboard/chat/kirim') ?>" method="post">

        <?= csrf_field() ?>

        <input type="hidden"
               name="id_photografer"
               value="<?= $photografer['id_photografer'] ?>">

        <input
            type="text"
            name="pesan"
            placeholder="Ketik pesan..."
            required>

        <button type="submit">
            Kirim
        </button>

    </form>

</div>

<?= $this->endSection() ?>