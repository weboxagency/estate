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
$route['default_controller'] 			= 'home';


$route['elan-yerlesdir'] 				= 'add_listing';
// $route['elan-yerlesdir/check_info'] = 'add_listing/check_info';
$route['istifadeci-razilasmasi'] 		= 'home/user_agreement';
$route['sitemap'] 						= 'home/sitemap';
$route['yeni-elanlar'] 					= 'elanlar/new';
$route['yeni-elanlar-satish'] 			= 'elanlar/new_satish';
$route['yeni-elanlar-kiraye-ayliq']		= 'elanlar/new_kiraye_ayliq';
$route['yeni-elanlar-kiraye-gunluk'] 	= 'elanlar/new_kiraye_gunluk';
$route['yeni-tikili'] 					= 'elanlar/yeni_tikili';
$route['kohne-tikili'] 					= 'elanlar/kohne_tikili';
$route['heyet-evi-bag'] 				= 'elanlar/heyet_evi_bag';
$route['villa'] 						= 'elanlar/villa';
$route['ofis'] 							= 'elanlar/office';
$route['torpaq'] 						= 'elanlar/torpaq';
$route['obyekt'] 						= 'elanlar/obyekt';
$route['qaraj'] 						= 'elanlar/qaraj';

/* SALE */

$route['yeni-tikili-satis'] 			= 'elanlar/yeni_tikili_sale';
$route['kohne-tikili-satis'] 			= 'elanlar/kohne_tikili_sale';
$route['heyet-evi-bag-satis'] 			= 'elanlar/heyet_evi_bag_sale';
$route['villa-satis'] 					= 'elanlar/villa_sale';
$route['ofis-satis'] 					= 'elanlar/office_sale';
$route['torpaq-satis'] 					= 'elanlar/torpaq_sale';
$route['obyekt-satis'] 					= 'elanlar/obyekt_sale';
$route['qaraj-satis'] 					= 'elanlar/qaraj_sale';

/* SALE END */

/* RENT */

$route['yeni-tikili-kiraye'] 			= 'elanlar/yeni_tikili_rent';
$route['kohne-tikili-kiraye'] 			= 'elanlar/kohne_tikili_rent';
$route['heyet-evi-bag-kiraye'] 			= 'elanlar/heyet_evi_bag_rent';
$route['villa-kiraye'] 					= 'elanlar/villa_rent';
$route['ofis-kiraye'] 					= 'elanlar/office_rent';
$route['torpaq-kiraye'] 				= 'elanlar/torpaq_rent';
$route['obyekt-kiraye'] 				= 'elanlar/obyekt_rent';
$route['qaraj-kiraye'] 					= 'elanlar/qaraj_rent';

/* RENT END */

/* RENT DAILY */

$route['yeni-tikili-kiraye-gundelik'] 			= 'elanlar/yeni_tikili_rent_daily';
$route['kohne-tikili-kiraye-gundelik'] 			= 'elanlar/kohne_tikili_rent_daily';
$route['heyet-evi-bag-kiraye-gundelik'] 		= 'elanlar/heyet_evi_bag_rent_daily';
$route['villa-kiraye-gundelik'] 				= 'elanlar/villa_rent_daily';
$route['ofis-kiraye-gundelik'] 					= 'elanlar/office_rent_daily';
$route['torpaq-kiraye-gundelik'] 				= 'elanlar/torpaq_rent_daily';
$route['obyekt-kiraye-gundelik'] 				= 'elanlar/obyekt_rent_daily';
$route['qaraj-kiraye-gundelik'] 				= 'elanlar/qaraj_rent_daily';

/* RENT DAILY END */


//HOME CONTROLLER
$route['wishlist'] 						= 'home/wishlist';
$route['secilmisler'] 					= 'home/secilmisler';
$route['complain'] 						= 'home/sikayet';
$route['elan/(:any)'] 					= 'home/detail/$1';
$route['axtar'] 						= 'home/search';
$route['activate-agency-profile'] 		= 'home/activate_agency';

// USER PROFILES
$route['hesabim'] 						= 'user/profile';
$route['elanlarim'] 					= 'user/account';
$route['balansim'] 						= 'user/balance';
$route['statistika'] 					= 'user/statistics';

//DASHBOARD
$route['auth/authentication']			= 'authentication';
$route['404_override'] 					= 'errors';
$route['translate_uri_dashes'] 			= FALSE;