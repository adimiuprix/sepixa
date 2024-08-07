<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomepageController::index');
$routes->get('category/(:segment)', 'HomepageController::category/$1');
$routes->get('products', 'HomepageController::allProduct');
$routes->get('product/(:segment)', 'HomepageController::productDetail/$1');
$routes->post('add_to_cart', 'ShoppingCartController::AddToCart');
$routes->post('remove_cart/(:any)', 'ShoppingCartController::RemoveCart/$1');
$routes->get('cart', 'ShoppingCartController::Cart');
$routes->get('update_cart/(:any)', 'ShoppingCartController::UpdateCart/$1');
$routes->get('checkout', 'ShoppingCartController::Checkout');

$routes->get('about', 'HomepageController::about');
$routes->get('therms_and_condition', 'HomepageController::thermscondition');
$routes->get('contact', 'HomepageController::contact');
$routes->get('news', 'HomepageController::news');

$routes->get('dashboard', 'DashboardController::index');
$routes->get('order', 'AccountController::order');
$routes->get('settings', 'AccountController::settings');

$routes->match(['get', 'post'], 'login', 'AuthController::login');
$routes->match(['get', 'post'], 'registration', 'AuthController::register');
$routes->get('logout', 'AuthController::logout');

$routes->get('licence', 'LicenceController::index');
$routes->post('cekval', 'LicenceController::checkLicence');

$routes->post('api/licvalidation', 'LicenceController::endpoint');

$routes->get('generate', 'SNGeneratorController::index');
$routes->post('generate', 'SNGeneratorController::generate');

$routes->get('domain/(:segment)', 'DomainCheckController::index/$1');