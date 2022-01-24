<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'FrontPageController::homepage');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/save', 'RegisterController::save');

$routes->group('dashboard', ['filter' => 'auth'], function($routes){
	// Dashboard
	$routes->get('/', 'PageController::index');

    // Route kamar
	$routes->get('kamar', 'KamarController::index');
	$routes->get('kamar/(:segment)/preview', 'KamarController::preview/$1');
    $routes->add('kamar/new', 'KamarController::new');
    $routes->add('kamar/store', 'KamarController::store');
	$routes->add('kamar/(:segment)/edit', 'KamarController::edit/$1');
	$routes->add('kamar/(:segment)/update', 'KamarController::update/$1');
	$routes->get('kamar/(:segment)/delete', 'KamarController::delete/$1');
    
    // Route dokter
	$routes->get('dokter', 'DokterController::index');
	$routes->get('dokter/(:segment)/preview', 'DokterController::preview/$1');
    $routes->add('dokter/new', 'DokterController::new');
    $routes->add('dokter/store', 'DokterController::store');
	$routes->add('dokter/(:segment)/edit', 'DokterController::edit/$1');
	$routes->add('dokter/(:segment)/update', 'DokterController::update/$1');
	$routes->get('dokter/(:segment)/delete', 'DokterController::delete/$1');
    
    // Route pasien
	$routes->get('pasien', 'PasienController::index');
	$routes->get('pasien/(:segment)/preview', 'PasienController::preview/$1');
    $routes->add('pasien/new', 'PasienController::new');
    $routes->add('pasien/store', 'PasienController::store');
	$routes->add('pasien/(:segment)/edit', 'PasienController::edit/$1');
	$routes->add('pasien/(:segment)/update', 'PasienController::update/$1');
	$routes->get('pasien/(:segment)/delete', 'PasienController::delete/$1');
    
	// Route Galeri
	$routes->get('galeri', 'GaleriController::index');
	$routes->get('galeri/(:segment)/preview', 'GaleriController::preview/$1');
    $routes->add('galeri/new', 'GaleriController::new');
    $routes->add('galeri/store', 'GaleriController::store');
	$routes->add('galeri/(:segment)/edit', 'GaleriController::edit/$1');
	$routes->add('galeri/(:segment)/update', 'GaleriController::update/$1');
	$routes->get('galeri/(:segment)/delete', 'GaleriController::delete/$1');
    
	// Route user
	$routes->get('user', 'UserController::index');
	$routes->get('user/(:segment)/delete', 'UserController::delete/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}