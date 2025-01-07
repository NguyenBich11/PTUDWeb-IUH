<!DOCTYPE html>
<?php
    session_start();
    error_reporting(1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <header class="col-md-12">
                <h1>Đây là header</h1>
            </header>
            <nav class="col-md-3 text-bg-dark">
                <ul class="nav flex-column">
                    <?php
                        include_once("view/menu.php");
                    ?>
                </ul>
            </nav>
            <section class="col-md-9">
                <?php
                    $page = $_REQUEST["page"];

                    switch($page){
                        case "register": include("view/register.php"); break;
                        case "accessRegister": include("view/accessRegister.php"); break;
                        case "login": include("view/login.php"); break;
                        case "accessLogin": include("view/accessLogin.php"); break;
                        case "logout": include("view/logout.php"); break;
                        default: echo "Welcome to php class";
                    }
                ?>
            </section>
        </div>
    </div>
</body>
</html>