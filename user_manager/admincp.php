<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>He thong quan ly thanh vien</title>
</head>
<body>
	<center>
		<p>Xin chao <?php echo $_SESSION['admin'] ?> <a href="logout.php" title="">Dang xuat</a></p>
		
		<?php 
		switch ($_GET['page']) {
			case 'add_user':
				include_once('add_user.php');
				break;
			case 'edit_user':
				include_once('edit_user.php');
				break;
			
			default:
				include_once('list_user.php');
				break;
		}
		 ?>
	</center>
</body>
</html>