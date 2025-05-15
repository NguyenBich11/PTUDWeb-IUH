<h2>Đăng nhặp tài khoản</h2>

<form action="#" name="formLogin" method="post">
    <div class="input-form">
        <label>Tên đăng nhập</label>
        <input type="text" name="username" required>
    </div>
    <div class="input-form">
        <label>Mật khẩu</label>
        <input type="password" name="password" required>
    </div>
    <div class="input-form">
        <input type="reset" value="Đặt lại">
        <input type="submit" value="Đăng nhập" name="btnSubmit">
    </div>
</form>

<?php 
    if(isset($_POST['btnSubmit'])) {
        include("controller/cUser.php");

        $p = new cUser();
        $p->cLogin($_POST['username'], $_POST['password']);
    }
?>