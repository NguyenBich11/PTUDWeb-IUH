<form action="#" method="POST" name="form-dn">
    <h2>form dang nhap tk nguoi dung: </h2>
    <label for="">ten dang nhap: </label>
    <input type="text" name="tdn" required> <br>

    <label for="">mat khau: </label>
    <input type="password" name="mk"> <br>

    <button type="submit" name="dangnhap" value="đăng nhập ">đăng nhập</button>
    <button type="reset" name="huydn" value="hủy đăng nhập">hủy đăng nhập</button>




</form>


<?php

    include("controller/cUser.php");
    $p = new controllUser();

    $tdn = $_POST["tdn"] ?? null;
    $mk = $_POST["mk"] ?? null;

    if(isset($_POST["dangnhap"])){
        $p -> xuly_dangnhap($tdn, $mk); 
    }


?> 