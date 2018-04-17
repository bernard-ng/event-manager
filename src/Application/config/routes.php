<?php

//default controller
$route['default_controller'] = 'HomeController';


/**
 * FRONT-END CONTROLLER
 * --------------------------------------------------------------------------------
 */
$route['leading'] = 'HomeController';
$route['sign'] = 'UsersController/sign';
$route['login'] = 'UsersController/login';
$route['logout']['get'] = "UsersController/logout";


/**
 * BACK-END CONTROLLER
 * --------------------------------------------------------------------------------
 */
$route['events'] = "AdminController";




// routing settings
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
