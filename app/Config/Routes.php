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
$routes->get('photografer', 'Photografer::index');