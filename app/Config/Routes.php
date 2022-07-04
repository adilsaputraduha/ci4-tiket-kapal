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
$routes->get('/', 'Home::index');

// Admin
$routes->get('/admin', 'AdminHome::index', ['filter' => 'auth']);
// Admin Login
$routes->get('/admin/login', 'AdminLoginController::index');
$routes->post('/admin/login/ceklogin', 'AdminLoginController::ceklogin');
$routes->get('/admin/logout', 'AdminLoginController::logout', ['filter' => 'auth']);
// User
$routes->get('/admin/user', 'AdminUserController::index', ['filter' => 'auth']);
$routes->post('/admin/user/save', 'AdminUserController::save', ['filter' => 'auth']);
$routes->post('/admin/user/edit', 'AdminUserController::edit', ['filter' => 'auth']);
$routes->post('/admin/user/change-password', 'AdminUserController::changepassword', ['filter' => 'auth']);
$routes->post('/admin/user/delete', 'AdminUserController::delete', ['filter' => 'auth']);
$routes->get('/admin/user/laporan', 'AdminUserController::laporan', ['filter' => 'auth']);
// Penumpang
$routes->get('/admin/penumpang', 'AdminPenumpangController::index', ['filter' => 'auth']);
$routes->post('/admin/penumpang/save', 'AdminPenumpangController::save', ['filter' => 'auth']);
$routes->post('/admin/penumpang/edit', 'AdminPenumpangController::edit', ['filter' => 'auth']);
$routes->post('/admin/penumpang/delete', 'AdminPenumpangController::delete', ['filter' => 'auth']);
$routes->get('/admin/penumpang/laporan', 'AdminPenumpangController::laporan', ['filter' => 'auth']);
// Kategori
$routes->get('/admin/kategori', 'AdminKategoriController::index', ['filter' => 'auth']);
$routes->post('/admin/kategori/save', 'AdminKategoriController::save', ['filter' => 'auth']);
$routes->post('/admin/kategori/edit', 'AdminKategoriController::edit', ['filter' => 'auth']);
$routes->post('/admin/kategori/delete', 'AdminKategoriController::delete', ['filter' => 'auth']);
$routes->get('/admin/kategori/laporan', 'AdminKategoriController::laporan', ['filter' => 'auth']);
// Rute
$routes->get('/admin/rute', 'AdminRuteController::index', ['filter' => 'auth']);
$routes->post('/admin/rute/save', 'AdminRuteController::save', ['filter' => 'auth']);
$routes->post('/admin/rute/edit', 'AdminRuteController::edit', ['filter' => 'auth']);
$routes->post('/admin/rute/delete', 'AdminRuteController::delete', ['filter' => 'auth']);
$routes->get('/admin/rute/laporan', 'AdminRuteController::laporan', ['filter' => 'auth']);
// Rute
$routes->get('/admin/rute', 'AdminRuteController::index', ['filter' => 'auth']);
$routes->post('/admin/rute/save', 'AdminRuteController::save', ['filter' => 'auth']);
$routes->post('/admin/rute/edit', 'AdminRuteController::edit', ['filter' => 'auth']);
$routes->post('/admin/rute/delete', 'AdminRuteController::delete', ['filter' => 'auth']);
$routes->get('/admin/rute/laporan', 'AdminRuteController::laporan', ['filter' => 'auth']);
// Kapal
$routes->get('/admin/kapal', 'AdminKapalController::index', ['filter' => 'auth']);
$routes->post('/admin/kapal/save', 'AdminKapalController::save', ['filter' => 'auth']);
$routes->post('/admin/kapal/edit', 'AdminKapalController::edit', ['filter' => 'auth']);
$routes->post('/admin/kapal/delete', 'AdminKapalController::delete', ['filter' => 'auth']);
$routes->get('/admin/kapal/laporan', 'AdminKapalController::laporan', ['filter' => 'auth']);
// Jadwal
$routes->get('/admin/jadwal', 'AdminJadwalController::index', ['filter' => 'auth']);
$routes->post('/admin/jadwal/save', 'AdminJadwalController::save', ['filter' => 'auth']);
$routes->post('/admin/jadwal/edit', 'AdminJadwalController::edit', ['filter' => 'auth']);
$routes->post('/admin/jadwal/delete', 'AdminJadwalController::delete', ['filter' => 'auth']);
$routes->get('/admin/jadwal/laporan', 'AdminJadwalController::laporan', ['filter' => 'auth']);
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
