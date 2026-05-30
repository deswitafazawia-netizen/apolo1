<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->post('', 'Login::store');
$routes->get('register', 'Register::index');
$routes->get('dashboardpelanggan', 'Dashboardpelanggan::index');
$routes->get('chatting', 'Chatting::index');
$routes->get('ichall', 'Ichall::index');
$routes->get('jackpicture', 'Jackpicture::index');
$routes->get('zulstudio', 'Zulstudio::index');
$routes->get('bookingichall', 'Bookingichall::index');
$routes->get('muhtadi', 'Muhtadi::index');
$routes->get('dashboardphotografer', 'Dashboardphotografer::index');
$routes->get('pesananjasa', 'Pesananjasa::index');
$routes->get('proyeklelang', 'Proyeklelang::index');
$routes->get('dashboardadmin', 'Dashboardadmin::index');
$routes->get('datapelanggan', 'Datapelanggan::index');
$routes->get('dataphotografer', 'Dataphotografer::index');
$routes->get('transaksipembayaran', 'Transaksipembayaran::index');
$routes->get('laporan', 'Laporan::index');