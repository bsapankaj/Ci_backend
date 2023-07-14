<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index',['filter' => 'auth']);
// short  test..
/* that is some test Start..  */
$routes->get('/simple', 'sitecontrollers::simple');
$routes->get('/about-us', 'sitecontrollers::about');
/* that is some test End..  */
// , ['filter' => 'admin-auth:dual,noreturn']
/* Admin Pnal Routes Start.. */
$routes->match(['get','post'],'/login', 'admin::login',['filter' => 'noauth']);
$routes->match(['get','post'],'/sinin', 'admin::sinin',['filter' => 'noauth']);
$routes->get('/logout', 'admin::logout',['filter' => 'auth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/sinin', 'admin::sinin',['filter' => 'noauth']);

$routes->get('/Dashboard', 'admin::Dashboard',['filter' => 'auth']);
$routes->get('/category', 'admin::category',['filter' => 'auth']);
$routes->get('/add_category', 'admin::add_category',['filter' => 'auth']);
$routes->get('/product', 'admin::product',['filter' => 'auth']);
$routes->get('/add_product', 'admin::add_product',['filter' => 'auth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/Dashboard', 'admin::Dashboard',['filter' => 'noauth']);
// $routes->match(['get','post'], '/category', 'admin::category',['filter' => 'noauth']);
// $routes->match(['get','post'], '/add_category', 'admin::add_category',['filter' => 'noauth']);
// $routes->match(['get','post'], '/product', 'admin::product',['filter' => 'noauth']);
// $routes->match(['get','post'], '/add_product', 'admin::add_product',['filter' => 'noauth']);


// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
// $routes->match(['get','post'], '/login', 'admin::login',['filter' => 'noauth']);
/* Admin Pnal Routes End.. */

/*
 *$routes->get('/login', 'admin::login',['filter' => 'noauth']);
 *$routes->get('/Dashboard', 'admin::Dashboard',['filter' => 'auth']);
 *$routes->get('/category', 'admin::category',['filter' => 'auth']);
 *$routes->get('/add_category', 'admin::add_category',['filter' => 'auth']);
 *$routes->get('/product', 'admin::product',['filter' => 'auth']);
 *$routes->get('/add_product', 'admin::add_product',['filter' => 'auth']);
 * 
 * 
 * 
 *
 */

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
