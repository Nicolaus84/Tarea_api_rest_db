<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/tarea', 'Home::test');
$routes->post('/clientes/insert', 'ClienteController::insert');
