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
$route['default_controller'] = 'AuthLogin/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//admin
$route['dashboard'] = 'Admin/Admin/index';
$route['Admin-booking'] = 'Admin/Admin/Bookinglist';
$route['admin-room'] = 'Admin/Admin/Roomlist';
$route['admin-hotel'] = 'Admin/Admin/Hotel';
$route['admin-customer'] = 'Admin/Admin/Customerlist';
$route['admin-payment'] = 'Admin/Admin/Paymentlist';
$route['admin-support'] = 'Admin/Admin/Support';
$route['admin-setting'] = 'Admin/Admin/Setting';

//hotel
$route['hotel-create'] = 'Admin/Hotel/Create';
$route['upload-process'] = 'Admin/Upload/process';
$route['hotel-edit/(:any)'] = 'Admin/Hotel/edit/$1';
$route['hotel-update'] = 'Admin/Hotel/update';
$route['hotel-delete/(:any)'] = 'Admin/Hotel/delete/$1';

//kamar
$route['room-create'] = 'Admin/Kamar/Create';
$route['room-edit/(:any)'] = 'Admin/Kamar/edit/$1';
$route['room-update'] = 'Admin/Kamar/update';
$route['room-delete/(:any)'] = 'Admin/Kamar/delete/$1';

//invoice-admin
$route['invoice-detail/(:any)'] = 'Admin/Admin/Invoicedetails/$1';
$route['invoice-printPDF/(:any)'] = 'Admin/Admin/invoice_print_pdf/$1';


//customer-hotel
$route['daftar-kamar/(:any)'] = 'Hotel/getKamarByHotel/$1';
$route['search-hotel'] = 'Hotel/searchHotel';

//booking
$route['booking/(:any)'] = 'Booking/index/$1';

//payment
$route['payment'] = 'Transaksi/payment';


