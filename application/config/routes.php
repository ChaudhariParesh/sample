<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// front route//
$route['default_controller'] = "front/front_controller/index";
$route['index/(:any)'] = "front/front_controller/index/$1";
$route['registration'] = "front/front_controller/registration";
$route['registration(:any)'] = "front/front_controller/registration/$1";
$route['about'] = "front/front_controller/about";
$route['enquiry'] = "front/front_controller/enquiry";
$route['enquiry/(:any)'] = "front/front_controller/enquiry/$1";
$route['upload_info'] = "front/front_controller/upload_info";
$route['search_request'] = "front/front_controller/search_request";
$route['diet_plan'] = "front/front_controller/diet_plan";
$route['gym_installation'] = "front/front_controller/gym_installation";
$route['retail'] = "front/front_controller/retail";
$route['consultancy'] = "front/front_controller/consultancy";
$route['details_request'] = "front/front_controller/details_request";
$route['draft_request'] = "front/front_controller/draft_request";
$route['contact'] = "front/front_controller/contact";
$route['contact/(:any)'] = "front/front_controller/contact/$1";

$route['add_property'] = "front/front_controller/add_property";
$route['add_property/(:any)'] = "front/front_controller/add_property/$1";
$route['add_enquiry'] = "front/front_controller/add_enquiry";


$route['login'] = "admin/admin_login/login"; 
$route['forgot_password'] = "admin/admin_login/forgot_password"; 
$route['reset_password/(:any)'] = "admin/admin_login/reset_password/$1"; 
$route['dashboard'] = "admin/admin_controller/dashboard";
$route['check_logout'] = "admin/admin_controller/check_logout"; 
$route['update_profile'] = "admin/admin_controller/update_profile";

$route['add-state'] = "admin/admin_controller/add_state"; 
$route['add-state/(:any)'] = "admin/admin_controller/add_state/$1";
$route['list-state'] = "admin/admin_controller/list_state"; 

$route['add-district'] = "admin/admin_controller/add_district";
$route['add-district/(:any)'] = "admin/admin_controller/add_district/$1";
$route['list-district'] = "admin/admin_controller/list_district";

$route['add-taluka'] = "admin/admin_controller/add_taluka"; 
$route['add-taluka/(:any)'] = "admin/admin_controller/add_taluka/$1"; 
$route['list-taluka'] = "admin/admin_controller/list_taluka"; 

$route['add-village'] = "admin/admin_controller/add_village"; 
$route['add-village/(:any)'] = "admin/admin_controller/add_village/$1"; 
$route['list-village'] = "admin/admin_controller/list_village"; 

$route['list_contact'] = "admin/admin_controller/list_contact"; 
$route['list_contact/(:any)'] = "admin/admin_controller/list_contact/$1"; 
$route['list_enquiry'] = "admin/admin_controller/list_enquiry"; 
$route['list_enquiry/(:any)'] = "admin/admin_controller/list_enquiry/$1"; 
$route['list_registration'] = "admin/admin_controller/list_registration"; 
$route['list_property'] = "admin/admin_controller/list_property"; 



$route['inactive/(:any)']="admin/admin_controller/inactive/$1";
$route['active/(:any)']="admin/admin_controller/active/$1";
$route['delete/(:any)']="admin/admin_controller/delete/$1";



 $route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */