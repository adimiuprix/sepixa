<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LicenceController::index');
$routes->post('cekval', 'LicenceController::checkLicence');

$routes->post('api/licvalidation', 'LicenceController::checkLicence');

$routes->get('generate', 'SNGeneratorController::index');
$routes->post('generate', 'SNGeneratorController::generate');