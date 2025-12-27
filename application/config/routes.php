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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

///================= onBoarding controller start ===========
$route['onBoarding'] = 'onBoarding/Login/developer_login';

$route['onBoarding_forgot'] = 'onBoarding/DeveloperForgot/developer_forgot';

$route['onBoarding_credentials'] = 'onBoarding/NewCredentials/new_credentials';

$route['onBoarding_verify'] = 'onBoarding/Verify/loaDverify';

///================= onBoarding controller end ===============



///================= Fronted controller start ==============
$route['extras'] = 'fronted/Extra/loaDextra';


///================= Fronted controller end =================



///================= Dashboard  controller start ==============
$route['admin_playground'] = 'dashBoard/Admin/AdminDashboard/loaDadmin_dashboard';
$route['about'] = 'dashBoard/Admin/AdminDashboard/loaDabout';

$route['introduce'] = 'dashBoard/Admin/AdminDashboard/loaDintroduce';
$route['skill'] = 'dashBoard/Admin/AdminDashboard/loaDmyskill';

$route['profile_card'] = 'dashBoard/Admin/AdminDashboard/loaDprofile_card';
$route['services'] = 'dashBoard/Admin/AdminDashboard/loaDservices';

$route['testimonials'] = 'dashBoard/Admin/AdminDashboard/loaDtestimonials';
$route['visitors'] = 'dashBoard/Admin/AdminDashboard/loaDvisitor_data';

$route['resume'] = 'dashBoard/Admin/AdminDashboard/loaDresume';
$route['portfolio'] = 'dashBoard/Admin/AdminDashboard/loaDportfolio';

///================= Dashboard  controller end =================
