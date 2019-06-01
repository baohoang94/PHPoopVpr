<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	ob_start();
	session_start();
	include('__autoload.php');
	if ($_SESSION['user_name'] == 'admin' && $_SESSION['user_lv'] == 2) {
		include_once('admincp.php');
	} else {
		include_once('login.php');
	}
	
 ?>