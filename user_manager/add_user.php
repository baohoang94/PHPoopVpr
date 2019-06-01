<?php 
	if (isset($_POST['submit_name'])) {
		$user_name = $_POST['user_name'];
		$user_pass = $_POST['user_pass'];
		$user_lv = $_POST['user_lv'];
		if (isset($user_name) && isset($user_pass) && isset($user_lv)) {
			$user = new user();
			$user->set_user_name($user_name);
			$user->set_user_pass($user_pass);
			$user->set_user_lv($user_lv);
			if ($user->add_user() == 'user exist') {
				$error = 'Tai khoan da ton tai';
			} else {
				header('location:index.php');
			}
		}						
	}
 ?>
<p><?php if (isset($error)) {
	echo $error;
} else {
	echo 'Khoi tao thong tin cho thanh vien moi';
}
 ?></p>
<form method="post">
	Tên tài khoản
	<input type="text" name="user_name" required="required" value="" placeholder="">
	<br>
	Mật khẩu
	<input type="password" required="required" name="user_pass" value="" placeholder="">
	<br>
	<select name="user_lv">
		<option value="1">Thanh vien</option>
		<option value="2">Admin</option>
	</select>
	<input type="submit" name="submit_name" value="Them thanh vien">
	<input type="reset" name="reset_name" value="Lam moi">
</form>