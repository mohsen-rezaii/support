<?php
ini_set("display_errors", 1);
error_reporting(E_ALL & ~E_NOTICE);

/**
 * IS LOCALHOST OR REMOTE
 * -----------------------------------
 */
$is_localhost = ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1');
define('IS_LOCALHOST', $is_localhost);


/**
 * DB INFO
 * -----------------------------------
 */
//REMOTE AND LOCAL INFO ARR
$dbinfo_arr = [
	
	'remote' => [
		'host'	=> 'xxxxxxxxxxxx',
		'user'	=> 'xxxxxxxxxxxx',
		'pass'	=> 'xxxxxxxxxxxx',
		'db'		=> 'xxxxxxxxxxxx'
	],
	
	'localhost' => [
		'host'	=> '127.0.0.1',
		'user'	=> 'root',
		'pass'	=> '444666',
		'db'		=> 'poco-people'
	]
	
];

//GET THE APPROPRIATE ARRAY
$dbinfo_key	= ($is_localhost) ? 'localhost' : 'remote';
$dbinfo			= $dbinfo_arr[$dbinfo_key]; //print_r($dbinfo);


//DB INFO CONSTANTS
defined('_HOST_PDO')	? NULL : 	define('_HOST_PDO', $dbinfo['host']);
defined('_USER_PDO')	? NULL : 	define('_USER_PDO', $dbinfo['user']);
defined('_PASS_PDO')	? NULL : 	define('_PASS_PDO', $dbinfo['pass']);
defined('_DB_PDO')		? NULL : 	define('_DB_PDO', $dbinfo['db']);


require_once('conn_pdo.php'); //echo dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR;