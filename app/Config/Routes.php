<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/warga', 'Warga::index');
$routes->get('/warga/create', 'Warga::create');
$routes->post('/warga/store', 'Warga::store');
$routes->get('/warga/edit/(:num)', 'Warga::edit/$1');
$routes->post('/warga/update/(:num)', 'Warga::update/$1');
$routes->get('/warga/delete/(:num)', 'Warga::delete/$1');
