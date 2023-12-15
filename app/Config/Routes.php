<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Register::index');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
