<?php 
	session_start();
	if ($_SESSION['user_name'] == 'admin' && $_SESSION['user_lv'] == 2) {
		include('__autoload.php');
		$user_id = $_GET['user_id'];
		$user = new user();
		$user->set_user_id($user_id);
		$user->del_user();
		header('location:index.php');
	}	else {
		echo 'Error: 404';
	}
?>