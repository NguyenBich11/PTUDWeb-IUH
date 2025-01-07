<h2>Login</h2>
<form class="container-fluid" action="index.php?page=accessLogin" name="formLogin" method="post">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Email</label>
        </div>
        <div class="col-auto">
            <input type="email" class="form-control" name="txtEmail" value="nguyenthingocbich12@gmail.com">
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Password</label>
        </div>
        <div class="col-auto">
            <input type="password" class="form-control" name="txtPassword">
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