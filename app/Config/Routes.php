<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->group('dashboard', function($routes){
    $routes->get('/', 'Dashboard::index');
});
$routes->get('booking', 'Booking::index');
$routes->get('photografer', 'Photografer::index');
$routes->get('portofolioichall', 'Portofolioichall::index');
$routes->get('proyeklelangpelanggan', 'Proyeklelangpelanggan::index');
$routes->get('pemesanan', 'Pemesanan::index');
$routes->get('statuspembayaranpelanggan', 'Statuspembayaranpelanggan::index');
$routes->get('pesananmasuk', 'Pesananmasuk::index');
$routes->get('proyeklelangphotografer', 'Proyeklelangphotografer::index');
$routes->get('pembayaranphotografer', 'Pembayaranphotografer::index');
$routes->get('rating', 'Rating::index');
$routes->get('pengguna', 'Pengguna::index');
$routes->get('tabelphotografer', 'Tabelphotografer::index');
$routes->get('photography', 'Photography::index');
$routes->get('pemesananadmin', 'Pemesananadmin::index');
$routes->get('proyeklelangadmin', 'Proyeklelangadmin::index');
$routes->get('pembayaranadmin', 'Pembayaranadmin::index');
$routes->get('laporan', 'Laporan::index');