<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home_Controller';
$route['login'] = 'User_Controller/login';
$route['register'] = 'User_Controller/register';
$route['logout'] = 'User_Controller/logout';
$route['search'] = 'Search_Controller/index';
$route['profile/(:num)'] = 'Profile_Controller/index/$1';
$route['dashboard'] = 'Dashboard_Controller/dashboard';
$route['edit-profile'] = "Dashboard_Controller/edit_profile";
$route['list-of-casts'] = "Cast_Controller/index";
$route['pakistan-city'] = "Cities_Controller/index";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
