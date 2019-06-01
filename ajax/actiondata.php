<?php 
	$q = $_GET['q'];
	
	// ket noi csdl
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'bookshop';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	$setLang = mysqli_query($conn, "SET NAMES 'utf8'");

	$sql = "SELECT * FROM books ORDER BY id DESC LIMIT 0, $q";
	$query = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($query)) {
		echo $row['id'].'. Tieu de: '.$row['title'].' - Tac gia :'.$row['author'].'<br>';
	}
 ?>