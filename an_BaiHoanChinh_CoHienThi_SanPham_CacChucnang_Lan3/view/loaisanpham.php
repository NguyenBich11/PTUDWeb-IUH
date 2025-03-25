<?php

    include("controller/cLoaisanpham.php");
    $p = new controllLoaisp();

    $loaisp = $p -> display_ten_loaisp();


    while($row = $loaisp -> fetch_assoc()){
        $tensp_replace = str_replace(" ", "", $row["tenloaisp"]);
        echo '<li><a href="index.php?page=sanpham_'. $tensp_replace .'">'. $row["tenloaisp"] .'</a></li>';  
    }

?> 