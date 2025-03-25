<h2>Đăng nhập</h2>
<form action="" name="formLogin" method="post">
    <div class="form-input">
        <label>Tên đăng nhập</label>
        <input type="text" name="username" required>
    </div>

    <div class="form-input">
        <label>Mật khẩu</label>
        <input type="password" name="password" required>
    </div>

    <div class="form-input">
        <input type="reset" value="Đặt lại">
        <input type="submit" value="Đăng nhập" name="btnLogin">
    </div>
</form>

<?php 
    if(isset($_POST['btnLogin'])) {
        include("controller/cUser.php");
        $p = new cUser();
        $p->cLogin($_POST['username'], $_POST['password']);
    }
?>