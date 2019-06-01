<?php 
	session_start();
	if ($_SESSION['user_name'] == 'admin' && $_SESSION['user_lv'] == 2) {
		session_destroy();
		header('location:index.php');
	} else {
		echo 'Error 404';
	}
 ?>