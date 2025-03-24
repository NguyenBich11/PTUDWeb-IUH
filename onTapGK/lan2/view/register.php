<h1>Đăng ký</h1>
<form action="" name="formRegis" method="post">
    <div class="input-form">
        <label for="">Tên đăng ký</label>
        <input type="text" name="username" required>
    </div>
    <div class="input-form">
        <label for="">Mật khẩu</label>
        <input type="password" name="password" required>
    </div>
    <div class="input-form">
        <input type="submit" name="bntRegis" value="Đăng ký">
        <input type="reset" value="Đặt lại">
    </div>
</form>

<?php 
    if(isset($_POST['bntRegis'])) {
        include("controller/cUser.php");
        $p = new cUser();
        $p->cRegister($_POST['username'], $_POST['password']);
    }
?>