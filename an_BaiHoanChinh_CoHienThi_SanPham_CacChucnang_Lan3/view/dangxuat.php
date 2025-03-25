<?php

    if(!isset($_SESSION{"LOGIN"})){
        echo "<script>alert('bạn can dang nhap truoc khi dang xuat')</script>";
        exit(); 
    }

    session_destroy();

    header("Location: index.php"); 

?> 