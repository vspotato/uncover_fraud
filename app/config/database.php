<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$active_group = 'default';
$active_record = TRUE;
/*
$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

$db['default']['hostname'] = $mysql_config["hostname"];
$db['default']['port'] = '3306';
$db['default']['username'] = $mysql_config["user"];
$db['default']['password'] = $mysql_config["password"];
$db['default']['database'] = $mysql_config["name"];
*/
$db['default']['hostname'] = 'localhost';
$db['default']['port'] = '3306';
$db['default']['username'] = 'root';
$db['default']['password'] = '123456';
$db['default']['database'] = 'startbbs';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = 'stb_';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = 'app/cache';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;