<h2>Trang đăng nhập</h2>

<form action="#" method="POST" name="formLogin">
    <div class="input-form">
        <label>Tên đăng nhập</label>
        <input type="text" name="txtUserName" required>
    </div>

    <div class="input-form">
        <label>Mật khẩu</label>
        <input type="password" name="txtPassword" required>
    </div>

    <input type="submit" name="btnSubmit" value="Đăng nhập">
</form>

<?php 
    if(isset($_REQUEST['btnSubmit'])) {
        include("Controller/cUser.php");
        $p = new cUser();

        $p->cLogin($_REQUEST['txtUserName'], $_REQUEST['txtPassword']);
    }
?>