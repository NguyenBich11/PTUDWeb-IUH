<!DOCTYPE html>
<?php
    session_start();
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tuần 04 lý thuyết - Ôn tập bài cũ sau Tết</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <img class="object-fit-contain" src="./img/logo_iuh_png.jpg" alt="">
        </header>
        <main class="container-fluid">
            <nav class="nav-bar navbar-expand">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <?php
                                include('./View/menu.php');
                            ?>
                        </ul>
                        <form class="d-flex ms-auto" role="search">
                            <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        </form>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-3 bg-dark-subtle p-2">
                    <span>Danh mục thương hiệu</span>
                    <img class="object-fit-content" src="./img/section-menu.png" alt="">
                </div>
                <div class="col-9 bg-body-secondary">
                    <?php
                        $page = $_REQUEST["page"];

                        switch($page){
                            case 'dangKy': include('./View/dangKy.php'); break;
                            case 'xuLyDK': include('./View/xuLyDK.php'); break;
                            case 'dangNhap': include('./View/dangNhap.php'); break;
                            case 'xuLyDN': include('./View/xuLyDN.php'); break;
                            case 'dangXuat': include('./View/dangXuat.php'); break;
                            default: echo '<span>Chào mừng bạn đến với PHP</span>';
                        }
                    ?>
                </div>
            </div>
        </main>
        <footer class="footer bg-body-tertiary text-center">Nguyễn Thị Ngọc Bích</footer>
    </div>
</body>
</html>