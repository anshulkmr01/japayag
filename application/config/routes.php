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


$route['user_login'] = 'user/Authentication/user_login';
$route['user_signup'] = 'user/Authentication/user_signup';
$route['registerNewUser'] = 'user/Authentication/registerNewUser';
$route['validateUser'] = 'user/Authentication/validateUser';
$route['logout'] = 'user/Authentication/logout';
$route['forgotPassword'] = 'user/Authentication/forgotPassword';
$route['recoverPassword'] = 'user/Authentication/recoverPassword';
$route['newPasword/(:any)/(:any)'] = 'user/Authentication/newPassword/$1/$2';
$route['setNewPassword'] = 'user/Authentication/setNewPassword';

$route['my_japa_mala'] = 'Home/my_japa_mala';
$route['yoga_kirtan'] = 'Home/yoga_kirtan';
$route['settings'] = 'Home/settings';
$route['knowJapayag'] = 'Home/knowJapayag';
$route['whychanting'] = 'Home/whychanting';

$route['saveJapa'] = 'JapaYag/saveJapa';
$route['updateJapa'] = 'JapaYag/updateJapa';
$route['collectReward'] = 'JapaYag/collectReward';
$route['japa-statics'] = 'JapaStatics';
$route['japa-statics/(:any)'] = 'JapaStatics/JapaStatics_City/$1';