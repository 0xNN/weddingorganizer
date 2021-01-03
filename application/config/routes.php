<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/dashboard';
$route['pelanggan'] = 'pelanggan/dashboard';

$route['daftar'] = 'pelanggan/daftar/store';
$route['logout'] = 'pelanggan/daftar/logout';

$route['gedung']['get'] = 'pelanggan/gedung/index';
$route['tentang']['get'] = 'pelanggan/tentang/index';
$route['paketlengkap']['get'] = 'pelanggan/paketlengkap/index';
$route['paketa']['get'] = 'pelanggan/paketa/index';
$route['paketb']['get'] = 'pelanggan/paketb/index';
$route['paketc']['get'] = 'pelanggan/paketc/index';
$route['paketd']['get'] = 'pelanggan/paketd/index';
$route['paketfoto']['get'] = 'pelanggan/paketfoto/index';
$route['paketkipas']['get'] = 'pelanggan/paketkipas/index';

// Login Handler
$route['login']['get'] = 'pelanggan/login/index';
$route['login']['post'] = 'pelanggan/login/check';

$route['admin/login']['get'] = 'admin/login/index';
$route['admin/login']['post'] = 'admin/login/check';
$route['admin/logout']['get'] = 'admin/login/logout';

$route['pelanggan/transaksi']['post'] = 'pelanggan/transaksi/store';
$route['lihat/transaksi/(:num)']['get'] = 'pelanggan/transaksi/show/$1';
$route['pelanggan/konfirmasi/pemesanan/(:num)']['get'] = 'pelanggan/konfirmasi/show/$1';

$route['admin/pemesanan/detail/(:num)']['get'] = 'admin/pemesanan/show/$1';
$route['admin/pemesanan/update/(:num)']['post'] = 'admin/pemesanan/update/$1';
