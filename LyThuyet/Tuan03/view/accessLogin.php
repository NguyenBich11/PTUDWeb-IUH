<?php
    include_once('controller/control_User.php');

    $user = new control_User();
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];
    
    if($user->login($email, $password)) {
        echo "<script>alert('Đăng nhập thành công')</script>";
    }else {
        echo "<script>alert('Sai thông tin đăng nhập')</script>";
    }
    header("Refresh:0.1; url=index.php");
?>