<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="container">
        <div class="header">



        </div>

        <div class="nav">
            <div class="nav-menu">
                <?php
                    include("view/menu.php"); 
                ?>
            </div>


            <div class="timkiem">
                <?php
                    include("view/timkiemsp.php"); 
                ?>

            </div>


        </div>


        <div class="content">
            <div class="section">
                <h2>danh muc thuong hieu</h2>
                <?php
                    $page = isset($_GET["page"]) ? $_GET["page"] : '';

                    switch($page){
                        case 'quanly':
                            include("view/quanly.php"); 
                            break;
                        case 'ql_xemdssp':
                            include("view/quanly.php"); 
                            break;
                        case 'ql_themsp':
                            include("view/quanly.php"); 
                            break;
                        case 'ql_xoasp':
                            include("view/quanly.php"); 
                            break;  
                        default:
                            include("view/loaisanpham.php"); 
                            break; 

                    }

                    
                ?> 

            </div>

            <div class="aside">

                <?php

                    $page = isset($_GET["page"]) ? $_GET["page"] : '';

                    switch($page){
                        case 'dangky':
                            include("view/dangky.php");
                            break;
                        case 'dangnhap':
                            include("view/dangnhap.php");
                            break;
                        case 'dangxuat':
                            include("view/dangxuat.php");
                            break;
                        case 'upload':
                            include("view/upload.php");
                            break;   
                        case 'sanpham_banhkeo':
                            include("view/sanpham_banhkeo.php");
                            break;   
                        case 'sanpham_douong':
                            include("view/sanpham_douong.php");
                            break; 
                        case 'timkiemsp_xuly':
                            include("view/timkiemsp_xuly.php");
                            break;    
                        case 'quanly':
                            echo "chào mừng bạn đến với trang quản lý"; 
                            break;
                        case 'ql_xemdssp':
                            include("view/ql_xemdssp.php"); 
                            break;
                        case 'ql_themsp':
                            include("view/ql_themsp.php"); 
                            break;
                        case 'ql_xoasp':
                            include("view/ql_xoasp.php"); 
                            break;  
                        default:
                            include("view/sanpham.php");
                            break;  
                    }
                ?> 


            </div>


        </div>


        <div class="footer">


        </div>






    </div>
    
</body>
</html>