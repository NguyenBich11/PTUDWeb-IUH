<?php
    include_once('Controller/C_User.php');

    $user = new C_User();
    $name = $_POST['txtUser'];
    $password = $_POST['txtPassword'];

    if($user->dangKy($name, $password)){
        echo "<script>alert('Đăng ký tài khoản thành công')</script>";
    }

    header("Refresh:0.1; url=index.php");
?>