<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['post/update'] = 'postingan/update';
$route['post/edit/(:any)'] = 'postingan/edit/$1';
$route['post/buat'] = 'postingan/buat';
$route['post/hapus/(:any)'] = 'postingan/hapus/$1';
$route['post/(:any)'] = 'postingan/lihat/$1';
$route['post'] = 'postingan/index';
$route['default_controller'] = 'postingan/index';
$route['(:any)'] = 'postingan/lihat/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
