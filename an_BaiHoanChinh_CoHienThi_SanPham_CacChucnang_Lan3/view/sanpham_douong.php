<?php
    include("controller/cSanpham.php");
    $p = new  controllSanpham();

    $sanpham = $p -> display_sp_douong();

    echo "<h2>danh sách sản phẩm đồ uống</h2>"; 
    
    while($row = $sanpham -> fetch_assoc()){
        echo $row["TENSP"] . "<br>";
        echo $row["GIASP"] . "<br>";
    }


?> 