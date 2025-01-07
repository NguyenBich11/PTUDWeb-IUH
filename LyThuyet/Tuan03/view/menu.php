<?php
    echo '  <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Trang chủ</a>
            </li>'; 

    if(isset($_SESSION["login"])) {
        echo '
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?page=index">Upload ảnh</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?page=index">Xem ảnh</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php?page=logout">Đăng xuất</a>
            </li>';
    }else if(isset($_SESSION["email"])) {
        echo '<li class="nav-item">
                <a class="nav-link text-white" href="index.php?page=login">Đăng nhập</a>
            </li>';
    }else {
        echo '<li class="nav-item">
                <a class="nav-link text-white" href="index.php?page=register">Đăng ký</a>
            </li>';
    }
?>