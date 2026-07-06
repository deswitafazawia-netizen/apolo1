<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>

<?php if ($role === 'admin'): ?>

    <div class="page-header">
        <h2>Manajemen Proyek Lelang</h2>
        <p>Kelola seluruh data proyek lelang yang dibuat oleh pelanggan.</p>
    </div>
    <div class="stats-container">
        <div class="stats-card">
            <div class="stats-icon"><i class="fas fa-folder-open"></i></div>
            <div><h3><?= $totalProyek ?></h3><p>Total Proyek</p></div>
        </div>
        <div class="stats-card">
            <div class="stats-icon warning"><i class="fas fa-play-circle"></i></div>
            <div><h3><?= $proyekAktif ?></h3><p>Proyek Aktif</p></div>
        </div>
        <div class="stats-card">
            <div class="stats-icon success"><i class="fas fa-check-circle"></i></div>
            <div><h3><?= $proyekSelesai ?></h3><p>Proyek Selesai</p></div>
        </div>
        <div class="stats-card">
            <div class="stats-icon" style="background:linear-gradient(135deg,#6b7280,#4b5563)"><i class="fas fa-ban"></i></div>
            <div><h3><?= $proyekDitutup ?></h3><p>Proyek Ditutup</p></div>
        </div>
    </div>
    <div class="table-container">
        <div class="table-header">
            <h3>Data Proyek Lelang</h3>
            <a href="<?= base_url('dashboard/tambahdataproyeklelang') ?>" class="btn-add">
                <i class="fa-solid fa-plus"></i> Tambah Data Proyek Lelang
            </a>
        </div>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Proyek</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Acara</th>
                    <th>Lokasi</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($proyek)): ?>
            <?php foreach ($proyek as $p): ?>
                <tr>
                    <td>PRJ<?= str_pad($p['id_proyek'], 3, '0', STR_PAD_LEFT) ?></td>
                    <td><?= esc($p['judul_proyek']) ?></td>
                    <td><?= esc($p['nama_pelanggan']) ?></td>
                    <td><?= date('d-m-Y', strtotime($p['tgl_acara'])) ?></td>
                    <td><?= esc($p['lokasi']) ?></td>
                    <td>Rp <?= number_format($p['budget'], 0, ',', '.') ?></td>
                    <td>
                        <?php if ($p['id_status'] == 1): ?>
                            <span class="badge badge-active">Aktif</span>
                        <?php elseif ($p['id_status'] == 2): ?>
                            <span class="badge badge-complete">Selesai</span>
                        <?php else: ?>
                            <span class="badge badge-closed">Ditutup</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('dashboard/proyek/detail/'.$p['id_proyek']) ?>" class="btn-detail">Detail</a>
                        <a href="<?= base_url('dashboard/proyeklelang/hapus/'.$p['id_proyek']) ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus proyek ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="8" style="text-align:center">Belum ada data proyek lelang.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php elseif ($role === 'pelanggan'): ?>

    <div class="page-header">
        <h2>Proyek Lelang</h2>
        <p>Buat proyek photography dan dapatkan penawaran terbaik dari photografer profesional.</p>
    </div>

    <div class="upload-project">
        <div class="section-header">
            <h2>Upload Proyek Lelang</h2>
            <p>Buat proyek photography dan dapatkan penawaran terbaik dari photografer profesional.</p>
        </div>
        <form action="<?= base_url('dashboard/proyeklelang/simpan') ?>" method="post" enctype="multipart/form-data">
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
            <button type="submit" class="publish-btn">
                <i class="fa-solid fa-paper-plane"></i> Publish Project
            </button>
        </form>
    </div>

    <div class="published-project">
        <?php if (!empty($proyek)): ?>
            <?php foreach ($proyek as $p): ?>
            <div class="project-card">
                <div class="project-top">
                    <span class="status <?= $p['id_status'] == 1 ? 'active' : 'closed' ?>">
                        <?= $p['id_status'] == 1 ? 'Proyek Aktif' : 'Proyek Ditutup' ?>
                    </span>
                </div>
                <h3><?= esc($p['judul_proyek']) ?></h3>
                <span><i class="fa-solid fa-calendar"></i> <?= date('d M Y', strtotime($p['tgl_acara'])) ?></span>
                <p class="project-desc"><?= esc($p['deskripsi']) ?></p>
                <div class="project-meta">
                    <span><i class="fa-solid fa-location-dot"></i> <?= esc($p['lokasi']) ?></span>
                </div>
                <div class="project-budget">
                    <small>Budget</small>
                    <h4>Rp <?= number_format($p['budget'], 0, ',', '.') ?></h4>
                </div>
                <?php if (!empty($p['lampiran'])): ?>
                    <div style="margin-top:15px;">
                        <a href="<?= base_url('uploads/proyek/'.$p['lampiran']) ?>" target="_blank">Lihat Lampiran</a>
                    </div>
                <?php endif; ?>
                <div class="project-actions">
                    <a href="<?= base_url('dashboard/penawaranpelanggan/'.$p['id_proyek']) ?>" class="btn-penawaran">Penawaran</a>
                    <?php if ($p['id_status'] == 1): ?>
                        <a href="<?= base_url('dashboard/proyeklelang/tutup/'.$p['id_proyek']) ?>" class="btn-close" onclick="return confirm('Yakin ingin menutup proyek ini?')">Tutup</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="project-card">
                <h3>Belum Ada Proyek</h3>
                <p>Silakan upload proyek pertama Anda.</p>
            </div>
        <?php endif; ?>
    </div>

<?php elseif ($role === 'photografer'): ?>

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
        <?php if (!empty($proyek)): ?>
            <?php foreach ($proyek as $p): ?>
            <div class="auction-card">
                <div class="auction-card-top">
                    <span class="project-tag">PROYEK</span>
                    <span class="project-budget">Rp <?= number_format($p['budget'], 0, ',', '.') ?></span>
                </div>
                <h2><?= esc($p['judul_proyek']) ?></h2>
                <div class="project-meta">
                    <span><i class="fa-solid fa-location-dot"></i> <?= esc($p['lokasi']) ?></span>
                    <span><i class="fa-solid fa-calendar"></i> <?= date('d M Y', strtotime($p['tgl_acara'])) ?></span>
                </div>
                <p><?= esc($p['deskripsi']) ?></p>
                <?php if (!empty($p['lampiran'])): ?>
                    <div style="margin-bottom:15px;">
                        <a href="<?= base_url('uploads/proyek/'.$p['lampiran']) ?>" target="_blank">
                            <i class="fa-solid fa-file"></i> Lihat Lampiran
                        </a>
                    </div>
                <?php endif; ?>
                <div class="project-footer">
                    <div>
                        <small>STATUS</small>
                        <h4><?= $p['id_status'] == 1 ? 'Aktif' : 'Ditutup' ?></h4>
                    </div>
                    <a href="<?= base_url('dashboard/penawaran/'.$p['id_proyek']) ?>" class="btn-bid">AJUKAN PENAWARAN</a>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="auction-card">
                <h2 style="margin-bottom:10px;">Belum Ada Proyek</h2>
                <p>Tidak ada proyek lelang yang tersedia saat ini.</p>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>

<?= $this->endSection() ?>
