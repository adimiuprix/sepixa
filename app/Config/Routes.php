<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LicenceController::index');
$routes->post('cekval', 'LicenceController::checkLicence');

$routes->post('api/licvalidation', 'LicenceController::endpoint');

$routes->get('generate', 'SNGeneratorController::index');
$routes->post('generate', 'SNGeneratorController::generate');

$routes->get('domain/(:segment)', 'DomainCheckController::index/$1');