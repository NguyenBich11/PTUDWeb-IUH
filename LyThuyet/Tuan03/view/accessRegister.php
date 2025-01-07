<?php
    include_once('controller/control_User.php');

    $user = new control_User();
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];
    
    if($user->register($email, $password)) {
        echo "<script>alert('Chúc mừng tạo tài khoản thành công')</script>";
    }

    header("Refresh:0.1; url=index.php");
?>