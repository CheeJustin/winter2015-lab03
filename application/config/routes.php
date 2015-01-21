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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

// Maps to the last controller in the last directory
$route['last'] = "last/last";

// Maps to the first controller, and runs the zzz function
$route['sleep'] = "first/zzz";

// Maps to the welcome controller, and runs the shucks function
// (Meant to satify "lock/em/up")
$route['lock/(:any)/(:any)'] = "welcome/shucks";

// Maps to the first controller, and runs the gimme function with a 3 as a parameter
$route['show/(:num)'] = "first/gimme/3";

// Maps to the guess controller
$route['dunno'] = "guess";

// Maps to the bingo controller
// (Meant to satisfy "wise/bingo")
$route['([a-zA-Z]{4})/bingo'] = "bingo";

// Maps to the bingo controller, and runs the wisdom function
// (Meant to satisfy the "comp4711/wisdom")
$route['(comp\d+)/(.+)'] = "bingo/wisdom";


/* End of file routes.php */
/* Location: ./application/config/routes.php */