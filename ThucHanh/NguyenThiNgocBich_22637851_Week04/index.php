<!DOCTYPE html>
<?php 
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực hành tuần 04</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">Đây là header</header>
        <main class="main">
            <nav class="nav">
                <?php
                    include('View/menu.php');
                ?>
            </nav>
            <section class="section">
                <?php
                    if(isset($_GET['act'])) {
                        switch($_GET['act']) {
                            case 'login': include('View/login.php'); break;
                            case 'register': include('View/register.php'); break;
                            case 'logout': include('View/logout.php'); break;
                            default: echo '<h2>Chào mừng đến với Website Nguyễn Thị Ngọc Bích!</h2>';
                        }
                    }
                ?>
            </section>
        </main>
        <footer class="footer">Nguyễn Thị Ngọc Bích 22637851</footer>
    </div>
</body>
</html>