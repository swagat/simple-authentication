<?php

//force display all errors (Please switch it off in production)
ini_set('display_errors', '1');

//create and store session across the entire application
session_start();

//Must have files for the application
require_once 'config.php';
require_once 'functions.php';

//Login key setup. Login key defines if a user is logged in or not
/*if (!empty($_SERVER['login_key'])) {
	$login_key = $_SERVER['login_key'];
} else {
	$login_key = '';
}*/

//Login key alternative setup
$login_key = (!empty($_SERVER['login_key'])) ? $_SERVER['login_key'] : '';