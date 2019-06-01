<?php 
    $user_id = $_GET['user_id'];
    $user_1 = new user();
    $sql = "SELECT * FROM user WHERE user_id = $user_id";
    $user_1->query($sql);
    $row = $user_1->fetch();
    if (isset($_POST['submit_name'])) {
        $user_name = $_POST['user_name'];
        $user_pass = $_POST['user_pass'];
        $user_lv = $_POST['user_lv'];
    }
    // sua thong tin thanh vien
    if (isset($user_id) && isset($user_name) && isset($user_pass) && isset($user_lv)) {
        $user_2 = new user();
        $user_2->set_user_id($user_id);
        $user_2->set_user_name($user_name);
        $user_2->set_user_pass($user_pass);
        $user_2->set_user_lv($user_lv);
        if ($user_2->edit_user() == 'user exist') {
            $error = 'Tai khoan da ton tai';
        } else {
            // header('location:index.php');
        }
    }
 ?>
<p><?php if (isset($error)) {
    echo $error;
} else {
    echo 'Cap nhat thong tin cho thanh vien';
}
 ?></p>
    <form method="post">
    Tên tài khoản
    <input type="text" name="user_name" value="<?php if (isset($_POST['user_name'])) {echo $_POST['user_name'];} else {echo $row['user_name'];} ?>
        " placeholder="">
    <br>
    Mật khẩu
    <input type="password" name="user_pass" value="<?php if(isset($_POST['user_pass'])){echo $_POST['user_pass'];}else{echo $row['user_pass'];} ?>" placeholder="">
    <br>
    <select name="user_lv">
        <option <?php if ($row['user_lv'] == 1) {
            echo 'selected';
        }
         ?> value="1">Thanh vien</option>
        <option <?php if ($row['user_lv'] == 2) {
            echo 'selected';
        }
         ?> value="2">Admin</option>
    </select>
    <input type="submit" name="submit_name" value="Cap nhat thong tin">
    <input type="reset" name="reset_name" value="Lam moi">
</form>