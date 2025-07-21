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

//$route['admin'] = 'admin/dashboard';
$route['default_controller'] = 'homeservice';
$route['about'] = 'homeservice/about';
$route['term_condition'] = 'homeservice/term_condition';
$route['cookie_policy'] = 'homeservice/cookie_policy';
$route['privacy_policy'] = 'homeservice/privacy_policy';
$route['refund_policy'] = 'homeservice/refund_policy';
$route['shipping_delivery_policy'] = 'homeservice/shipping_delivery_policy';
$route['delivery_partner_termcondition'] = 'homeservice/delivery_partner_termcondition';
$route['payment_verify'] = 'homeservice/payment_verify';
$route['franchise_book'] = 'homeservice/franchise_book';
$route['franchise_orderbook'] = 'homeservice/franchise_orderbook';
$route['franchise_makepayment'] = 'homeservice/franchise_makepayment';
$route['franchise_payment_verify'] = 'homeservice/franchise_payment_verify';
$route['review'] = 'homeservice/review';
$route['order_status'] = 'homeservice/order_status';
$route['service'] = 'homeservice/service';
$route['service_form'] = 'homeservice/service_form';
$route['serviceform_save'] = 'homeservice/serviceform_save';
$route['orderpdf'] = 'homeservice/orderpdf';
$route['makepayment'] = 'homeservice/makepayment';
$route['supercoin'] = 'homeservice/supercoin';
$route['daesynpluszone'] = 'homeservice/daesynpluszone';
$route['franchise'] = 'homeservice/franchise';
$route['contactform'] = 'homeservice/contactform';
$route['contact'] = 'homeservice/contact';
$route['register'] = 'homeservice/register';
$route['user_register'] = 'homeservice/user_register';
$route['delivery_register'] = 'homeservice/delivery_register';
$route['login'] = 'homeservice/login';
$route['servicedetails'] = 'homeservice/servicedetails';
$route['franchise_pdf'] = 'homeservice/franchise_pdf';
$route['admin'] = 'admin/login';
$route['user'] = 'admin/login/user';
$route['user/dashboard'] = 'admin/login/fran_validatelogin';
$route['user/franchise_order_list'] = 'admin/login/franchise_order_list';
$route['user/frachise_order_add'] = 'admin/login/frachise_order_add';
$route['user/get_sub_services'] = 'admin/login/get_sub_services';

$route['logout']= 'homeservice/userlogout';
$route['myorder']= 'homeservice/myorder';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
