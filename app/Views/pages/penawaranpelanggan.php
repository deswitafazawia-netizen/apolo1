<?= $this->extend('dashboard') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <h2>Daftar Penawaran</h2>
    <p>Photografer yang telah mengirim penawaran.</p>
</div>

<div class="order-container">

<?php if(!empty($penawaran)): ?>

    <?php foreach($penawaran as $p): ?>

    <div class="order-card">

        <div class="order-info">

            <h3><?= esc($p['nama_photografer']) ?></h3>

            <p>
                Harga Penawaran :
                <strong>
                    Rp <?= number_format($p['harga_penawaran'],0,',','.') ?>
                </strong>
            </p>

            <p><?= esc($p['deskripsi_penawaran']) ?></p>

        </div>

        <div class="order-detail">

            <a href="<?= base_url('dashboard/pilihphotografer/'.$p['id_penawaran']) ?>"
                class="btn-detail">
                Pilih Photografer
            </a>

        </div>

    </div>

    <?php endforeach; ?>

<?php else: ?>

    <div class="order-card">
        <p>Belum ada photografer yang mengirim penawaran.</p>
    </div>

<?php endif; ?>

</div>

<?= $this->endSection() ?>