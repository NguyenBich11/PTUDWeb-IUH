<?php 
    if(isset($_SESSION['login'])) {
        echo '
            <a href="?act=upload">Upload ảnh</a>
            <a href="?act=logout">Đăng xuất</a>
        ';
    }elseif(isset($_SESSION['username'])) {
        echo '<a href="?act=login">Đăng nhập</a>';
    }else {
        echo '<a href="?act=register">Đăng ký</a>';
    }
?>