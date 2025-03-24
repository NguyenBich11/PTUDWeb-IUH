<h1>Dang ky</h1>
<form action="" method="post" name="formLogin">
    <div class="input-form">
        <label>Ten dang ky</label>
        <input type="text" name="username" require>
    </div>
    <div class="input-form">
        <label>Mat khau</label>
        <input type="password" name="password" require>
    </div>
    <div class="btn-form">
        <input type="submit" value="Dat lai" name="reset">
        <input type="submit" value="Dang ky" name="regis">
    </div>
</form>
<?php 
    if(isset($_POST['regis'])) {
        include("controller/cUser.php");
        $p = new cUser();
        $resultLogin = $p->cRegister($_POST['username'], $_POST['password']);
    }
?>