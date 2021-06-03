<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'User/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register']['get'] = 'auth/register';
$route['register']['post'] = 'auth/post_register';
$route['login']['get'] = 'auth/login';
$route['login']['post'] = 'auth/post_login';
$route['logout'] = 'auth/logout';

$route['profile'] = 'user/user_profile';
$route['create_post'] = 'user/create_post';
$route['update_profile'] = 'user/update_profile';
$route['delete_post/(:num)'] = 'user/delete_post/$1';

//admin
$route['admin'] = 'admin/index';
$route['admin/studio/admin_studio'] = 'admin/admin_studio';
$route['admin/studio/admin_add_studio'] = 'admin/save';
$route['admin/studio/admin_edit_studio'] = 'admin/edit_studio';
$route['admin/update'] = 'admin/update';


$route['user'] = 'user/index';
//$route['user'] = 'user/user_profile';
$route['edit'] = 'admin/edit';

//studio
$route['studio'] = 'studio/index';
$route['studio/add_studio']['get'] = 'studio/add_studio';
$route['studio/edit_studio'] = 'studio/edit';

//booking
$route['booking']['get'] = 'booking/index';
$route['booking']['post'] = 'booking/booking_save';
$route['booking/v_confirmbooking']['get'] = 'booking/confirm';

//jadwal-studio
$route['jadwal'] = 'jadwal/index';

//JAM
$route['jam'] = 'jam/index';
$route['jam/edit'] = 'jam/edit';
$route['admin/jam/update'] = 'jam/update';
$route['jam/add_jam'] = 'jam/add';
$route['admin/jam'] = 'jam/save';



//paid/pembayaran
$route['pembayaran'] = 'pembayaran/index';
$route['admin/payment/v_payment'] = 'pembayaran/add';
$route['admin/payment/edit_payment'] = 'pembayaran/edit';
$route['admin/payment/update'] = 'pembayaran/update';

//Laporan
$route['report'] = 'report/index';




