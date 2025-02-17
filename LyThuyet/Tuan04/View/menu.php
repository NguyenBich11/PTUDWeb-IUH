<?php
    session_start();
    echo '<li class="nav-item"><a href="index.php" class="nav-link">Trang chủ |</a></li>';

    if(isset($_SESSION['dangNhap'])){
        echo '<li class="nav-item"><a href="index.php?page=dangXuat" class="nav-link ml-4">Đăng xuất</a></li>';
    }else if(isset($_SESSION['username'])){
        echo '<li class="nav-item"><a href="index.php?page=dangNhap" class="nav-link ml-4">Đăng nhập</a></li>';
    }else {
        echo '<li class="nav-item"><a href="index.php?page=dangKy" class="nav-link ml-4">Đăng ký</a></li>';
    }
?>