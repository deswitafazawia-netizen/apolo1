<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <div class="header">
        <h3>Dashboard Admin</h3>
        <div>👤 Admin</div>
    </div>

    <div class="container">

        <div class="sidebar">
            <h3>Menu</h3>
            <ul>
                <li><a href="<?= base_url('dashboardadmin') ?>">Pesanan Photography</a></li>
                <li><a href="<?= base_url('datapelanggan') ?>">Data Pelanggan</a></li>
                <li><a href="<?= base_url('dataphotografer') ?>">Data Fotografer</a></li>
                <li><a href="<?= base_url('transaksipembayaran') ?>">Transaksi Pembayaran</a></li>
                <li><a href="<?= base_url('laporan') ?>">Laporan</a></li>
                <li><a href="<?= base_url('login') ?>">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Laporan</h2>

            <table class="table-pesanan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pesanan</th>
                        <th>Pelanggan</th>
                        <th>Photografer</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>1</th>
                        <th>2 mei 2027</th>
                        <th>Kirania Wedding</th>
                        <th>Muhammad</th>
                        <th>082536485736</th>
                        <td>
                            <button class="edit">Edit</button>
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <th>2</th>
                        <th>10 mei 2027</th>
                        <th>Kirania Wedding</th>
                        <th>Muhammad</th>
                        <th>082536485736</th>
                        <td>
                            <button class="edit">Edit</button>
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>