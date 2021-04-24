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
$route['default_controller'] = 'Landing';
$route['Browse'] = 'Browse';
$route['admin'] = 'Admin_Controller/Add_Movie_Controller';
$route['add_genre'] = 'Admin_Controller/Add_Movie_Controller/add_genre';
$route['add_actor'] = 'Admin_Controller/Add_Movie_Controller/add_actor';
$route['add_director'] = 'Admin_Controller/Add_Movie_Controller/add_director';
$route['add_year'] = 'Admin_Controller/Add_Movie_Controller/add_year';
$route['add_movie'] = 'Admin_Controller/Add_Movie_Controller/add_movie';
$route['deleteGenre'] = 'Admin_Controller/Delete_Row_Controller/deleteGenre';
$route['deleteActor'] = 'Admin_Controller/Delete_Row_Controller/deleteActor';
$route['deleteDirector'] = 'Admin_Controller/Delete_Row_Controller/deleteDirector';
$route['deleteYear'] = 'Admin_Controller/Delete_Row_Controller/deleteYear';
$route['deleteMovie'] = 'Admin_Controller/Delete_Row_Controller/deleteMovie';
$route['login_movie'] = 'Admin_Controller/Login_Movie_Controller';
$route['get_login'] = 'Admin_Controller/Login_Movie_Controller/get_login';
$route['preview/(:num)'] = 'Preview/show_movie/$1';
$route['filter_movies'] = 'Browse/filter_movies';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
