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

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['delete_update/(:any)'] = "delete_update/delete_update/$1";
$route['delete_comment/(:any)'] = "delete_comment/delete_comment/$1";
$route['add_comment/(:any)'] = "add_comment/add_comment/$1";

$route['about/(:any)'] = "about/about/$1";
$route['follow/(:any)'] = "follow/follow/$1";
$route['unfollow/(:any)'] = "unfollow/unfollow/$1";
$route['profile/(:any)'] = "profile/profile/$1";
$route['update/(:any)'] = "update/update/$1";

$route['messages/send'] 				= "messages/send";
$route['messages/conversation/(:num)'] 	= "messages/conversation/$1";
$route['messages/add/(:num)'] 			= "messages/add/$1";
$route['messages/(:any)'] 				= "messages/messages";


/* End of file routes.php */
/* Location: ./application/config/routes.php */