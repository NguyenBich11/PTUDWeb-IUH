<?php
    include_once('Controller/C_User.php');

    $user = new C_User();
    $name = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    if($user->dangNhap($name, $password)){
        echo "<script>alert('Đăng nhập thành công')</script>";
    }else {
        echo "<script>alert('Đăng nhập không thành công. Sai thông tin đăng nhập!')</script>";
    }

    header("Refresh:0.1; url=index.php");
?>