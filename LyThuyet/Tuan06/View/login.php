<h2>Login</h2>
<form class="container-fluid" action="#" name="formLogin" method="POST">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Email</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control" name="txtUserName" placeholder="Tên đăng nhập"  required>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Password</label>
        </div>
        <div class="col-auto">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="txtPassword" required>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <input type="submit" class="btn btn-primary" name="btnLogin" value="Login">
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-primary" value="Reset">
        </div>
    </div>
</form>
<?php
    if(isset($_REQUEST['btnLogin'])) {
        include('Controller/cUser.php');

        $p = new cUser();
        $p->cLogin($_REQUEST['txtUserName'], $_REQUEST['txtPassword']);
    }
?>