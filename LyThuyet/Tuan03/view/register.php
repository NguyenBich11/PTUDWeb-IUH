<h2 class="text-center">Register</h2>
<form class="container" action="index.php?page=accessRegister" name="formRegister" method="post">
    <div class="row mb-3 g-3 align-items-center text-center">
        <div class="col"></div>
        <div class="col-4">
            <label class="col-form-label">Email</label>
        </div>
        <div class="col-4">
            <input type="email" class="form-control" name="txtEmail" value="nguyenthingocbich12@gmail.com">
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3 g-3 align-items-center text-center">
        <div class="col"></div>
        <div class="col-4">
            <label class="col-form-label">Password</label>
        </div>
        <div class="col-4">
            <input type="password" class="form-control" name="txtPassword">
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3 g-3 align-items-center">
        <div class="col"></div>
        <div class="col d-flex align-items-end justify-content-around ">
            <input type="submit" class="btn btn-primary" name="btnSubmit" value="Register">
            <input type="submit" class="btn btn-primary" value="Reset">
        </div>
        <div class="col"></div>
    </div>
</form>