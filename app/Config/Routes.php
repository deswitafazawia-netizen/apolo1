<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->post('store', 'Login::store');
$routes->post('add/users', 'Register::register');
$routes->get('register', 'Register::index');
$routes->get('logout', 'Login::logout');

$routes->group('dashboard', function ($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('booking/(:num)/(:num)', 'Booking::index/$1/$2');
    $routes->post('booking/simpan', 'Booking::simpan');
    $routes->get('pemesanan', 'Pemesanan::index');
    $routes->get('pemesanan/terima/(:num)', 'Pemesanan::terima/$1');
    $routes->get('pemesanan/tolak/(:num)', 'Pemesanan::tolak/$1');
    $routes->get('pemesanan/batalkan/(:num)', 'Pemesanan::batalkan/$1');
    $routes->get('profil', 'Profil::index');
    $routes->post('profil/update', 'Profil::update');
    $routes->get('editportofolio/(:num)', 'Portofolio::edit/$1');
    $routes->post('updateportofolio/(:num)', 'Portofolio::update/$1');
    $routes->get('hapusportofolio/(:num)', 'Portofolio::hapus/$1');
    $routes->get('chat/(:num)', 'Chat::index/$1');
    $routes->get('chat/inbox', 'Chat::inbox');
    $routes->get('chat/with/(:num)', 'Chat::with/$1');
    $routes->post('chat/kirim', 'Chat::kirim');
    $routes->post('chat/kirim-ajax', 'Chat::kirimAjax');
    $routes->get('chat/polling', 'Chat::polling');
    $routes->post('chat/typing', 'Chat::typing');
    $routes->get('chat/is-typing', 'Chat::isTyping');
    $routes->post('chat/stop-typing', 'Chat::stopTyping');
    $routes->get('portofolio/(:num)', 'Portofolio::index/$1');
    $routes->get('proyeklelang', 'Proyeklelang::index');
    $routes->post('proyeklelang/simpan', 'Proyeklelang::simpan');
    $routes->get('proyeklelang/tutup/(:num)', 'Proyeklelang::tutup/$1');
    $routes->get('proyeklelang/hapus/(:num)', 'Proyeklelang::hapus/$1');
    $routes->get('penawaran/(:num)', 'Penawaran::index/$1');
    $routes->post('penawaran/simpan', 'Penawaran::simpan');
    $routes->get('penawaran/pilih/(:num)', 'Penawaran::pilih/$1');
    $routes->get('penawaranpelanggan/(:num)', 'Penawaran::penawaranPelanggan/$1');
    $routes->get('pilihphotografer/(:num)', 'Penawaran::pilihPhotografer/$1');
    $routes->get('pengguna', 'Pengguna::index');
    $routes->get('tambahdatapelanggan', 'Tambahdatapelanggan::index');
    $routes->post('tambahdatapelanggan/simpan', 'Tambahdatapelanggan::simpan');
    $routes->get('detailpelanggan/(:num)', 'Pengguna::detail/$1');
    $routes->get('pengguna/edit/(:num)', 'Pengguna::edit/$1');
    $routes->post('pengguna/update/(:num)', 'Pengguna::update/$1');
    $routes->get('pengguna/hapus/(:num)', 'Pengguna::hapus/$1');
    $routes->get('tambahportofolio', 'Tambahportofolio::index');
    $routes->post('tambahportofolio/simpan', 'Tambahportofolio::simpan');
    $routes->get('tambahdataphotografer', 'Tambahdataphotografer::index');
    $routes->post('tambahdataphotografer/simpan', 'Tambahdataphotografer::simpan');
    $routes->get('tambahdataproyeklelang', 'Tambahdataproyeklelang::index');
    $routes->post('tambahdataproyeklelang/simpan', 'Tambahdataproyeklelang::simpan');
    $routes->get('photography', 'Photography::index');
    $routes->get('editkategori/(:num)', 'Photography::editKategori/$1');
    $routes->post('updatekategori/(:num)', 'Photography::updateKategori/$1');
    $routes->get('hapuskategori/(:num)', 'Photography::hapusKategori/$1');
    $routes->get('editjenis/(:num)', 'Photography::editJenis/$1');
    $routes->post('updatejenis/(:num)', 'Photography::updateJenis/$1');
    $routes->get('hapusjenis/(:num)', 'Photography::hapusJenis/$1');
    $routes->get('tabelphotografer', 'Tabelphotografer::index');
    $routes->get('tambahdatakategori', 'Tambahdatakategori::index');
    $routes->post('tambahdatakategori/simpan', 'Tambahdatakategori::simpan');
    $routes->get('tambahdatajenis', 'Tambahdatajenis::index');
    $routes->post('tambahdatajenis/simpan', 'Tambahdatajenis::simpan');
    $routes->get('proyek/detail/(:num)', 'Proyeklelangadmin::detail/$1');
    $routes->get('bayar/(:num)', 'Bayar::index/$1');
    $routes->post('bayar/simpan', 'Bayar::simpan');
    $routes->get('photografer', 'Photografer::index');
    $routes->get('portofoliojack', 'Portofoliojack::index');
    $routes->get('portofoliosadali', 'Portofoliosadali::index');
    $routes->get('portofoliomuhtadi', 'Portofoliomuhtadi::index');
    $routes->get('pembayaran', 'Pembayaran::index');
    $routes->get('rating', 'Rating::index');
    $routes->post('rating/simpan', 'Rating::simpan');
    $routes->get('tambahdatapelanggan', 'Tambahdatapelanggan::index');
    $routes->get('tambahdataphotografer', 'Tambahdataphotografer::index');
    $routes->get('tambahdataproyeklelang', 'Tambahdataproyeklelang::index');
    $routes->get('photography', 'Photography::index');
    $routes->get('laporan', 'Laporan::index');
});
