<?php 
    session_start();
?>
<a href="index.php">Trang chủ</a>
<?php 
    if(isset($_SESSION['login'])) {
        echo '<a href="?act=logout" onClick="return confirm(\'Bạn có thật sự muốn đăng xuất?\')">Đăng xuất</a>';
    }else {
        echo '<a href="?act=login">Đăng nhập</a> <br>
                <a href="?act=register">Đăng ký</a>';
    }
?>