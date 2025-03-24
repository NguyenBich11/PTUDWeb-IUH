<h1>Dang nhap</h1>
<form action="" method="post" name="formLogin">
    <div class="input-form">
        <label>Ten dang nhap</label>
        <input type="text" name="username" require>
    </div>
    <div class="input-form">
        <label>Mat khau</label>
        <input type="password" name="password" require>
    </div>
    <div class="btn-form">
        <input type="submit" value="Dat lai" name="reset">
        <input type="submit" value="Dang nhap" name="login">
    </div>
</form>

<?php 
    if(isset($_POST['login'])) {
        include("controller/cUser.php");
        $p = new cUser();
        
        $p->cLogin($_POST['username'], $_POST['password']);
    }
?>