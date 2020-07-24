<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages_controller/index';
$route['(:any)'] = 'page_contents/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
