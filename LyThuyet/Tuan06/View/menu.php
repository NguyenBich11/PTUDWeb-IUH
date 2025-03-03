<?php
    session_start();
?>
<li class="nav-item">
   <a class="nav-link text-white" href="index.php">Trang chủ</a>
</li>
<?php
    if(isset($_SESSION["login"])) {
        echo '
            <li class="nav-item">
                <a class="nav-link text-white" href="?act=logout" onClick="return confirm(\'Bạn thật sự muốn thoát?\');">Đăng xuất</a>
            </li>';
    }else {
        echo '<li class="nav-item">
                <a class="nav-link text-white" href="?act=register">Đăng ký</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="?act=login">Đăng nhập</a>
            </li>';
    }
?>