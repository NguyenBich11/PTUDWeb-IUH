<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Thị Ngọc Bích - 22637851</title>
</head>
<body>
    <header class="header">Đây là header</header>
    <main class="main">
        <nav class="nav">
            <ul>
                <a href="index.php">Trang chủ</a>
                <?php 
                    include("view/nav.php");
                ?>
            </ul>
        </nav>
        <section class="section">
            <?php 
                if(isset($_GET['act'])) {
                    switch($_GET['act']){
                        case 'login': include("view/login.php"); break;
                        case 'logout': include("view/logout.php"); break;
                        case 'register': include("view/register.php"); break;
                        case 'upload': include("view/upload.php"); break;
                        default: echo "<h2>Nguyen Thi Ngoc Bich - 22637851</h2>";
                    }
                }
            ?>
        </section>
    </main>
</body>
</html>