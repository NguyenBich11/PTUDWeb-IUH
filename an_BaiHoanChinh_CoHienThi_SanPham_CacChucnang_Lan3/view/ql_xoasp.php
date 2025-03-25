<?php
    if(!isset($_SESSION{"LOGIN"})){
        echo "<script>alert('bạn can dang nhap truoc khi quản ly sp')</script>"; 
        exit(); 
    }

?>
<form action="#" method="POST">
    <h2>Giao diện xóa sp: </h2>

    <?php
        include("controller/cSanpham.php");
        $p = new  controllSanpham();
    
        $sanpham = $p -> display_all_sp();
    
        echo "<h2>danh sách sản phẩm</h2>"; 
        
        while($row = $sanpham -> fetch_assoc()){
            echo '<form action="#" method="POST">'; 
            echo $row["TENSP"] . "<br>";
            echo $row["GIASP"] . "<br>";
            echo '<input type="hidden" name="id_sp" value="'. $row["ID"] .'">';
            echo '<button type="submit" name="xoasp" value="xóa sp"> xóa sp</button>';
            echo "<br>"; 
            echo '</form>'; 
        }
    ?>



</form>



<?php
    include_once("controller/cSanpham.php");
    $p = new controllSanpham();

    $id_sp =  $_POST["id_sp"] ?? null;

    if(isset($_POST["xoasp"])){
        if($p -> thucthi_xoasp($id_sp)){
            echo "<script>alert('xóa sp thành công'); window.location.href='index.php?page=ql_xoasp'</script>";
        }
    }



?> 