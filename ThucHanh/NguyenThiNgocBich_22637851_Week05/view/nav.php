<?php 
    if(isset($_SESSION['login'])) {
        echo '<a href="index.php?act=login">Đăng xuất</a>';
    }else {
        echo '<a href="index.php?act=home">Trang chủ</a> | 
        <a href="index.php?act=register">Đăng ký</a> | 
        <a href="index.php?act=login">Đăng nhập</a>';
    }
?>