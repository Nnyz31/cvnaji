<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('pendidikan', 'Home::pendidikan');
$routes->get('pengalaman', 'Home::pengalaman');
$routes->get('skills', 'Home::skills');
$routes->get('portofolio', 'Home::portofolio');
