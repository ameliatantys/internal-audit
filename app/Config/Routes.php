<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// RUTE KHUSUS PENANGGUNG JAWAB AUDIT
// route akses ke data audit
$routes->get('pjw/', 'PJW::index');
$routes->get('pjw/tambah_data_audit', 'PJW::tambah_data');
$routes->get('pjw/data_audit', 'PJW::data_audit');

// RUTE KHUSUS PIC 
// route akses ke data audit
$routes->get('pic/', 'PIC::index');
$routes->get('pic/data_audit', 'PIC ::data_audit');


// RUTE KHUSUS PIC Manajer
// route akses ke data audit
$routes->get('manajer/', 'Manajer::index');
$routes->get('manajer/data_audit', 'Manajer::data_audit');

/**
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
