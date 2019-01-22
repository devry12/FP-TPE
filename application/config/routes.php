<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'MejaController';

$route['menu'] = 'FrontController';
$route['selectmeja'] = 'MejaController/selectMeja';

$route['cart'] = 'FrontController/cart';
$route['pesan/(:any)'] = 'FrontController/pesan/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
