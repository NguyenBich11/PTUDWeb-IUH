<h1>Đăng nhập</h1>
<form action="" name="formRegis" method="post">
    <div class="input-form">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username" required>
    </div>
    <div class="input-form">
        <label for="">Mật khẩu</label>
        <input type="password" name="password" required>
    </div>
    <div class="input-form">
        <input type="submit" name="bntLogin" value="Đăng nhập">
        <input type="reset" value="Đặt lại">
    </div>
</form>

<?php 
    if(isset($_POST['bntLogin'])) {
        include("controller/cUser.php");
        $p = new cUser();
        $p->cLogin($_POST['username'], $_POST['password']);
    }
?>