<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Define routes
 * 
 * @return View OR Object
 */

 /**
  * Default
  */
$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Custom view routes
 */

$route['home'] = 'pages/index';
$route['projects'] = 'pages/projects';
$route['timeline'] = 'pages/timeline';
$route['login'] = 'pages/login';

 /**
  * API Endpoints
  * 
  * @return Object
  */

  $route['api/login'] = 'users/auth';


