<?php 
	$arr_courses=array(
		'Khoa hoc HTML',
		'Khoa hoc css',
		'Khoa hoc jav',
		'Khoa hoc jquery',
		'Khoa hoc php',
		'Khoa hoc Mysql',
		'Khoa hoc laravel',
		'Khoa hoc angular',
		'Khoa hoc react',
		'Khoa hoc python'
	);
	$rand_keys = array_rand($arr_courses,1);
	echo $arr_courses[$rand_keys];
 ?>