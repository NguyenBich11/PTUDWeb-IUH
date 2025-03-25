<h2>Đăng ký</h2>
<form action="" name="formLogin" method="post">
    <div class="form-input">
        <label>Tên đăng ký</label>
        <input type="text" name="username" required>
    </div>

    <div class="form-input">
        <label>Mật khẩu</label>
        <input type="password" name="password" required>
    </div>

    <div class="form-input">
        <input type="reset" value="Đặt lại">
        <input type="submit" value="Đăng ký" name="btnRegis">
    </div>
</form>

<?php 
    if(isset($_POST['btnRegis'])) {
        echo "<script>alert('có nút')</script>";
        include("controller/cUser.php");
        echo "<script>alert('include đưcọ')</script>";
        $p = new cUser();
        $p->cRegister($_POST['username'], $_POST['password']);
    }
?>