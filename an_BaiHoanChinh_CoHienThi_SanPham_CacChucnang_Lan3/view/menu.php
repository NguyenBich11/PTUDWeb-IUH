<?php

    echo '<a href="index.php">trang chu</a> &nbsp'; 
    if(isset($_SESSION["LOGIN"])){
        echo '<a href="index.php?page=quanly">quanly</a> &nbsp'; 
        echo '<a href="index.php?page=upload">upload</a> &nbsp'; 
        echo '<a href="index.php?page=dangxuat">dang xuat</a> &nbsp'; 
    }
    else{
        echo '<a href="index.php?page=dangky">dang ky</a> &nbsp';
        echo '<a href="index.php?page=dangnhap">dang nhap</a> &nbsp'; 
    }



?> 