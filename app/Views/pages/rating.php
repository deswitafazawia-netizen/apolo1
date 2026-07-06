<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <h2>Rating & Ulasan</h2>
    <p>
        <?php if ($role === 'photografer'): ?>
            Lihat penilaian dan ulasan yang diberikan pelanggan terhadap layanan Anda.
        <?php elseif ($role === 'pelanggan'): ?>
            Berikan rating dan ulasan untuk pemesanan yang telah selesai.
        <?php else: ?>
            Kelola seluruh data rating dan ulasan.
        <?php endif; ?>
    </p>
</div>

<?php if ($role === 'photografer'): ?>
    <!-- Photographer: Stats + Reviews -->
    <div class="rating-summary">
        <div class="rating-score">
            <h1><?= number_format($avg_rating, 1) ?></h1>
            <div class="stars"><?= str_repeat('&#9733;', round($avg_rating)) . str_repeat('&#9734;', 5 - round($avg_rating)) ?></div>
            <p><?= $total_rating ?> Ulasan Pelanggan</p>
        </div>
        <div class="rating-detail">
            <?php
            $counts = [5 => 0, 4 => 0, 3 => 0, 2 => 0, 1 => 0];
            foreach ($ratings as $r) {
                $n = (int)($r['nilai_rating'] ?? 0);
                if ($n >= 1 && $n <= 5) $counts[$n]++;
            }
            $maxCount = max($counts) ?: 1;
            for ($star = 5; $star >= 1; $star--):
                $pct = round(($counts[$star] / $maxCount) * 100);
            ?>
            <div class="rating-row">
                <span><?= $star ?> &#9733;</span>
                <div class="progress">
                    <div class="progress-fill" style="width:<?= $pct ?>%"></div>
                </div>
                <span><?= $counts[$star] ?></span>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="review-container">
        <?php if (!empty($ratings)): ?>
            <?php foreach ($ratings as $r): ?>
            <div class="review-card">
                <div class="review-header">
                    <div class="profile">
                        <div class="avatar-placeholder" style="width:60px;height:60px;border-radius:50%;background:#2a2a2a;display:flex;align-items:center;justify-content:center;">
                            <i class="fa-solid fa-user" style="color:#666;font-size:24px;"></i>
                        </div>
                        <div>
                            <h4><?= esc($r['nama_pelanggan'] ?? 'Anonymous') ?></h4>
                            <span>Rating: <?= $r['nilai_rating'] ?>/5</span>
                        </div>
                    </div>
                    <div class="review-date"><?= date('d F Y', strtotime($r['tgl_rating'])) ?></div>
                </div>
                <div class="review-stars"><?= str_repeat('&#9733;', (int)$r['nilai_rating']) . str_repeat('&#9734;', 5 - (int)$r['nilai_rating']) ?></div>
                <?php if (!empty($r['komentar'])): ?>
                    <p class="review-text"><?= esc($r['komentar']) ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="review-card" style="text-align:center;">
                <p style="color:#bdbdbd;">Belum ada ulasan.</p>
            </div>
        <?php endif; ?>
    </div>

<?php elseif ($role === 'pelanggan'): ?>
    <!-- Customer: Rate completed bookings -->

    <?php if (!empty($completed)): ?>
        <?php foreach ($completed as $p): ?>
            <?php if (in_array($p['id_pemesanan'], $ratedIds)): ?>
                <!-- Already rated -->
                <div class="review-card">
                    <div class="review-header">
                        <div class="profile">
                            <div>
                                <h4><?= esc($p['nama_photografer'] ?? '-') ?> — <?= esc($p['nama_jenis'] ?? '-') ?></h4>
                                <span style="color:#22c55e;"><i class="fa-solid fa-check-circle"></i> Sudah diberi rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!-- Not yet rated -->
                <div class="rating-form-card">
                    <div class="rating-form-header">
                        <h4><?= esc($p['nama_photografer'] ?? '-') ?></h4>
                        <span><?= esc($p['nama_jenis'] ?? '-') ?> — <?= date('d F Y', strtotime($p['tgl_acara'])) ?></span>
                    </div>
                    <form action="<?= base_url('dashboard/rating/simpan') ?>" method="post">
                        <input type="hidden" name="id_pemesanan" value="<?= $p['id_pemesanan'] ?>">
                        <input type="hidden" name="id_photografer" value="<?= $p['id_photografer'] ?>">

                        <div class="star-rating">
                            <p>Nilai Rating</p>
                            <div class="star-input">
                                <input type="radio" name="nilai_rating" value="5" id="star5-<?= $p['id_photografer'] ?>"><label for="star5-<?= $p['id_photografer'] ?>">&#9733;</label>
                                <input type="radio" name="nilai_rating" value="4" id="star4-<?= $p['id_photografer'] ?>"><label for="star4-<?= $p['id_photografer'] ?>">&#9733;</label>
                                <input type="radio" name="nilai_rating" value="3" id="star3-<?= $p['id_photografer'] ?>"><label for="star3-<?= $p['id_photografer'] ?>">&#9733;</label>
                                <input type="radio" name="nilai_rating" value="2" id="star2-<?= $p['id_photografer'] ?>"><label for="star2-<?= $p['id_photografer'] ?>">&#9733;</label>
                                <input type="radio" name="nilai_rating" value="1" id="star1-<?= $p['id_photografer'] ?>"><label for="star1-<?= $p['id_photografer'] ?>">&#9733;</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Komentar</label>
                            <textarea name="komentar" placeholder="Tulis komentar Anda..." rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn-pay" style="margin-top:15px;width:auto;padding:12px 30px;">
                            <i class="fa-solid fa-paper-plane"></i> Kirim Rating
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="empty-data">
            <i class="fa-solid fa-star"></i>
            <p>Belum ada pemesanan selesai yang bisa dirating.</p>
        </div>
    <?php endif; ?>

    <!-- My Submitted Ratings -->
    <?php if (!empty($ratings)): ?>
        <div class="page-header" style="margin-top:40px;">
            <h2>Rating Saya</h2>
        </div>
        <div class="review-container">
            <?php foreach ($ratings as $r): ?>
            <div class="review-card">
                <div class="review-header">
                    <div class="profile">
                        <div>
                            <h4><?= esc($r['nama_photografer'] ?? '-') ?></h4>
                        </div>
                    </div>
                    <div class="review-date"><?= date('d F Y', strtotime($r['tgl_rating'])) ?></div>
                </div>
                <div class="review-stars"><?= str_repeat('&#9733;', (int)$r['nilai_rating']) . str_repeat('&#9734;', 5 - (int)$r['nilai_rating']) ?></div>
                <?php if (!empty($r['komentar'])): ?>
                    <p class="review-text"><?= esc($r['komentar']) ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

<?php elseif ($role === 'admin'): ?>
    <!-- Admin: Table View -->
    <div class="table-container">
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pelanggan</th>
                    <th>Photografer</th>
                    <th>Rating</th>
                    <th>Ulasan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($ratings)): ?>
                    <?php foreach ($ratings as $r): ?>
                    <tr>
                        <td><?= $r['id_rating'] ?></td>
                        <td><?= esc($r['nama_pelanggan'] ?? '-') ?></td>
                        <td><?= esc($r['nama_photografer'] ?? '-') ?></td>
                        <td>
                            <span class="badge" style="background:rgba(255,193,7,.15);color:#ffc107;border:1px solid rgba(255,193,7,.4);">
                                <?= $r['nilai_rating'] ?>/5
                            </span>
                        </td>
                        <td><?= esc(substr($r['komentar'] ?? '-', 0, 50)) ?></td>
                        <td><?= date('d/m/Y', strtotime($r['tgl_rating'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6" style="text-align:center">Belum ada data rating.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
