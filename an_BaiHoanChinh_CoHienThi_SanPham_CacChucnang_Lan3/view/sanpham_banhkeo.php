<?php
    include_once("controller/cSanpham.php");
    $p = new  controllSanpham();

    $sanpham = $p -> display_sp_banhkeo();

    echo "<h2>danh sách sản phẩm bánh kẹo</h2>"; 
    
    while($row = $sanpham -> fetch_assoc()){
        echo $row["TENSP"] . "<br>";
        echo $row["GIASP"] . "<br>";
    }


?> 