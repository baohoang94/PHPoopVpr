<?php 
	$user = new user();
	$sql = "SELECT * FROM user";
	$user->query($sql);
 ?>
 <p>Danh sach thanh vien - <a href="index.php?page=add_user" title="">Them thanh vien moi</a></p>
<table border="1">
	<thead>
		<tr>
			<th>Ten tk</th>
			<th>Mat khau</th>
			<th>Cap</th>
			<th>Sua</th>
			<th>Xoa</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row = $user->fetch()) { ?>
		<tr>
			<td><?php echo $row['user_name'] ?></td>
			<td><?php echo $row['user_pass'] ?></td>
			<td><?php echo $row['user_lv'] ?></td>
			<td><a href="index.php?page=edit_user&user_id=<?php echo $row['user_id'] ?>">sửa</a></td>
			<td><a href="del_user.php?page=edit_user&user_id=<?php echo $row['user_id'] ?>">Xóa</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>