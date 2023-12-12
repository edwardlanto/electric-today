<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/electrical-substation/high-voltage-test-equipment/(:any)', 'ElectricSubstationController::read/$1');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
