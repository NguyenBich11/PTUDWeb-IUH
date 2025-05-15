<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ôn tập cuối kì lần 1</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <p>BÀI THI CUỐI KỲ MÔN PHÁT TRIỂN ỨNG DỤNG WEB</p>
        </header>

        <main class="main">
            <nav class="nav">
                <?php 
                    if(isset($_SESSION['login'])) {
                        echo '<a href="?act=logout" onClick="return confirm(\'Bạn có chắc chắn muốn đăng xuất\');">Đăng xuất</a>';
                    }
                ?>
            </nav>
            <?php 
                if(isset($_GET['func'])) {
                    switch($_GET['func']) {
                        case 'updateProduct': include("view/updateProduct.php"); break;
                        default: include("admin.php"); break;
                    }
                }elseif(isset($_GET['act'])) {
                    switch($_GET['act']){
                        case 'logout': include("view/logout.php"); break;
                        case 'admin': include("admin.php"); break;
                        default: ;
                    }
                }else{
                    include("view/login.php");
                }
            ?>
        </main>

        <footer class="footer">
            <p>Ngọc Bích - Nguyễn Thị - 22637851</p>
        </footer>
    </div>
</body>
</html>