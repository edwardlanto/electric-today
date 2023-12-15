<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/electrical-substation/high-voltage-test-equipment/(:any)', 'PostController::read/$1');
$routes->get('/author/(:any)', 'AuthorController::read/$1');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->group('api', static function ($routes) {
    $routes->post('comment/create', 'CommentController::create');

});
