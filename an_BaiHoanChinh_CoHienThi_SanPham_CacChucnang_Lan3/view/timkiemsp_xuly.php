<?php   


    $giatri = $_POST["giatri"] ?? null;
    $timkiem = $_POST["timkiem"] ?? null;

    include("controller/cSanpham.php");
    $p = new  controllSanpham();

    $sanpham = $p -> display_sp_timkiem($giatri);

    echo "<h2>danh sách sản phẩm</h2>"; 
    
    while($row = $sanpham -> fetch_assoc()){
        echo $row["TENSP"] . "<br>";
        echo $row["GIASP"] . "<br>";
    }


?> 