<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <div class="header">
    <div class="logo">
        <img src="<?= base_url('assets/logo.png') ?>" alt="logo">
    </div>
    </div>

    <div class="container">

        <div class="sidebar">
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
            <h2>Data Pelanggan</h2>

            <button class="btn-tambah">+ Tambah Pelanggan</button>

            <table class="table-pelanggan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Hak Akses</th>
                        <th>Pashword</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Deswita</td>
                        <td>deswita@gmail.com</td>
                        <td>08123456789</td>
                        <td>Pelanggan</td>
                        <th>ndhhfhd</th>
                        <td>
                            <button class="edit">Edit</button>
                            <button class="hapus">Hapus</button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Rina</td>
                        <td>rina@gmail.com</td>
                        <td>08234567890</td>
                        <td>Pelanggan</td>
                        <th>bhdhf</th>
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