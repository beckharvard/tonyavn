<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['pages/work'] = 'pages/work';
$route['pages'] = 'pages';
$route['login/login'] = 'login/login';
$route['login'] = 'login';
$route['user/registration'] = 'user/registration';
$route['user/login'] = 'user/login';
$route['user/thank'] = 'user/thank';
$route['user/verify'] = 'user/verify';
$route['user/logout'] = 'user/logout';
$route['user/reset'] = 'user/reset';
$route['user/reset_error'] = 'user/reset_error';
$route['user/reset_password'] = 'user/reset_password';
$route['user/reset_form'] = 'user/reset_form';
$route['user/password_reset'] = 'user/password_reset';
$route['user'] = 'user';
$route['verify'] = 'verify';
$route['verify/(:any)'] = 'verify/$1';
$route['sites/create'] = 'sites/create';
$route['sites/delete'] = 'sites/delete';
$route['sites/success'] = 'sites/success';
$route['sites/contact'] = 'sites/contact';
$route['sites/messages'] = 'sites/messages';
$route['pages/(:any)'] = 'pages/view/$1';
$route['user/(:any)'] = 'user/view/$1';
$route['sites/(:any)'] = 'sites/view/$1';
$route['sites'] = 'sites';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages';

/* End of file routes.php */
/* Location: ./application/config/routes.php */