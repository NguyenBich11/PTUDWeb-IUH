<h2>Trang đăng ký</h2>

<form action="#" method="POST" name="formRegister">
    <div class="input-form">
        <label>Tên đăng ký</label>
        <input type="text" name="txtUserName" required>
    </div>

    <div class="input-form">
        <label>Mật khẩu</label>
        <input type="password" name="txtPassword" required>
    </div>

    <input type="submit" name="btnSubmit" value="Đăng ký">
</form>

<?php 
    if(isset($_REQUEST['btnSubmit'])) {
        include_once("Controller/cUser.php");
        $p = new cUser();
        $p->cRegister($_REQUEST['txtUserName'], $_REQUEST['txtPassword']);
    }
?>