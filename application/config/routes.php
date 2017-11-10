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
$route['default_controller'] = 'views/index';
$route['notes'] = 'views/personal';

# view
$route['index'] = 'views/index';


# API
# user
$route['api/user/(:any)']['GET'] = 'users/get/$1';


# card
$route['api/card/(:any)']['POST'] = 'cards/post/$1';
$route['api/card/(:any)']['GET'] = 'cards/get/$1';

$route['api/card/(:any)/(:any)']['POST'] = 'cards/post/$1/$2';
$route['api/card/(:any)/(:any)']['GET'] = 'cards/get/$1/$2';

$route['api/comment/(:any)']['POST'] = 'cards/post_comments/$1';
$route['api/comment/(:any)']['GET'] = 'cards/get_comment/$1';

$route['api/done/(:any)']['POST'] = 'cards/mark_as_done/$1';


# task
$route['api/task/(:any)']['POST'] = 'tasks/post/$1';
$route['api/task/(:any)']['GET'] = 'tasks/get/$1';

$route['api/task/(:any)/(:any)']['POST'] = 'tasks/post/$1/$2';
$route['api/task/(:any)/(:any)']['GET'] = 'tasks/get/$1/$2';

$route['api/note/(:any)']['POST'] = 'tasks/post_notes/$1';
$route['api/note/(:any)']['GET'] = 'tasks/get_notes/$1';

// $route['api/done/(:any)']['POST'] = 'tasks/mark_as_done/$1';


# end-of-API


# other
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;