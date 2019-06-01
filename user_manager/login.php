<?php 
	if (isset($_POST['submit_name'])) {
		$user_name = $_POST['user_name'];
		$user_pass = $_POST['user_pass'];
		if (isset($user_name) && isset($user_pass)) {
			$user = new user();
			$user->set_user_name($user_name);
			$user->set_user_pass($user_pass);

			if($user->login() == 'user valid') {
				header('location:index.php');
			} else {
			$error = 'Tai khoan ko hop le';
			}
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
</head>
<body>
	<center>
		<?php if(isset($error)){echo $error;} ?>
		<form method="post">
			Tên tài khoản
			<input type="text" name="user_name" value="" required placeholder="">
			<br>
			Mật khẩu
			<input type="password" required name="user_pass" value="" placeholder="">
			<br>
			<input type="submit" name="submit_name" value="ĐĂng nhập">
			<input type="reset" name="reset_name" value="Lam moi">
		</form>
	</center>
</body>
</html>