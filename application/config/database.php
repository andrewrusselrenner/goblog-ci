<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	setting aja yang seperlunya sesuai koneksi database.
	isi yang:
	=> database = ini isi dengan nama database mu yg kamu buat di phpmyadmin. contoh
	   'database' => 'nagacengho'
	=> password = kalo ada pw nya diisi, kalo gak ada biarin kosong. contoh
	   'password' => 'buntu12345'

*/

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'goblog',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
