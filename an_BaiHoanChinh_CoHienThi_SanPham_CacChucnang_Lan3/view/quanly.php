<?php

if(!isset($_SESSION{"LOGIN"})){
    echo "<script>alert('bạn can dang nhap truoc khi quản ly sp')</script>"; 
    exit(); 
}



    echo '<a href="index.php?page=ql_xemdssp">xem danh sach san pham</a> &nbsp'; 
    echo "<br>"; 
    echo '<a href="index.php?page=ql_themsp">thêm sản phẩm</a> &nbsp'; 
    echo "<br>"; 
    echo '<a href="index.php?page=ql_xoasp">xóa sản phẩm</a> &nbsp'; 
 




?> 