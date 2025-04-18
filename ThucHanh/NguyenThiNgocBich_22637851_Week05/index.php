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
    <header>Đây là header</header>
    <main class="main">
        <nav class="nav">
            <?php 
                include("view/nav.php");
            ?>
        </nav>
        <section class="section">
            <nav class="type">
                <h2>Loại sản phẩm</h2>
                <?php 
                    include("controller/cType.php");
                    $p = new cType();
                    $tblType = $p->cgetAllType();

                    if($tblType) {
                        while($row = $tblType->fetch_assoc()) {
                            echo '<a href="index.php?type='.$row['idType'].'">'.$row['nameType'].'</a> <br>';
                        }
                    }
                ?>
            </nav>
            <main class="product"> 
                <?php 
                    if(isset($_GET['act'])) {
                        switch($_GET['act']) {
                            case 'home': include("view/home.php"); break;
                            case 'login': include("view/login.php"); break;
                            case 'register': include("view/register.php"); break;
                            // case 'logout': include("view/logout.php"); break;
                        }
                    }
                ?>
            </main>
        </section>
    </main>
</body>
</html>