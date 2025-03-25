<form action="#" method="POST" name="form-dk">
    <h2>form dang ky tk nguoi dung: </h2>
    <label for="">ten tai khoan: </label>
    <input type="text" name="tdn" required> <br>

    <label for="">mat khau: </label>
    <input type="password" name="mk"> <br>

    <button type="submit" name="dangky" value="đăng ký">đăng ký</button>
    <button type="reset" name="huydk" value="hủy đăng ký">hủy đăng ký</button>




</form>


<?php

    include("controller/cUser.php");
    $p = new controllUser();

    $tdn = $_POST["tdn"] ?? null;
    $mk = $_POST["mk"] ?? null;

    if(isset($_POST["dangky"])){
        $p -> xuly_dangky($tdn, $mk); 
    }


?> 