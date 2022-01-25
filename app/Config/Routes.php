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

// Front Page Routes
$routes->get('/', 'FrontPageController::homepage');
$routes->get('/portfolio/(:segment)', 'FrontPageController::portfolio_detail/$1');
$routes->add('contact_form/store', 'ContactFormController::store');

// Auth Routes
$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/save', 'RegisterController::save');


$routes->group('dashboard', ['filter' => 'auth'], function($routes){
	// Dashboard
	$routes->get('/', 'PageController::index');
    
    // Route Tim
	$routes->get('tim', 'TimController::index');
	$routes->get('tim/(:segment)/preview', 'TimController::preview/$1');
    $routes->add('tim/new', 'TimController::new');
    $routes->add('tim/store', 'TimController::store');
	$routes->add('tim/(:segment)/edit', 'TimController::edit/$1');
	$routes->add('tim/(:segment)/update', 'TimController::update/$1');
	$routes->get('tim/(:segment)/delete', 'TimController::delete/$1');
    
    // Route portfolio
	$routes->get('portfolio', 'PortfolioController::index');
	$routes->get('portfolio/(:segment)/preview', 'PortfolioController::preview/$1');
    $routes->add('portfolio/new', 'PortfolioController::new');
    $routes->add('portfolio/store', 'PortfolioController::store');
	$routes->add('portfolio/(:segment)/edit', 'PortfolioController::edit/$1');
	$routes->add('portfolio/(:segment)/update', 'PortfolioController::update/$1');
	$routes->get('portfolio/(:segment)/delete', 'PortfolioController::delete/$1');
    
	// Route Client
	$routes->get('client', 'ClientController::index');
	$routes->get('client/(:segment)/preview', 'ClientController::preview/$1');
    $routes->add('client/new', 'ClientController::new');
    $routes->add('client/store', 'ClientController::store');
	$routes->add('client/(:segment)/edit', 'ClientController::edit/$1');
	$routes->add('client/(:segment)/update', 'ClientController::update/$1');
	$routes->get('client/(:segment)/delete', 'ClientController::delete/$1');
	
	// Route Contact Form
	$routes->get('contact_form', 'ContactFormController::index');
	$routes->get('contact_form/(:segment)/delete', 'ContactFormController::delete/$1');
    
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
