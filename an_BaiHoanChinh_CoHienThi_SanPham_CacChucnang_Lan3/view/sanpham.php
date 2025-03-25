<?php
    include("controller/cSanpham.php");
    $p = new  controllSanpham();

    $sanpham = $p -> display_all_sp();

    echo "<h2>danh sách sản phẩm</h2>"; 
    
    while($row = $sanpham -> fetch_assoc()){
        echo $row["TENSP"] . "<br>";
        echo $row["GIASP"] . "<br>";
    }


?> 