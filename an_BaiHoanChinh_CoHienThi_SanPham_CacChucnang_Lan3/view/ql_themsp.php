<?php
    if(!isset($_SESSION{"LOGIN"})){
        echo "<script>alert('bạn can dang nhap truoc khi quản ly sp')</script>"; 
        exit(); 
    }

?>
<form action="#" method="POST">
    <h2>Giao diện thêm sản phẩm: </h2>
    <label for="">ten san pham: </label>
    <input type="text" name="tensp" required> <br>

    <label for="">giá san pham: </label>
    <input type="text" name="giasp" required> <br>

    <label for="">loai san pham: </label>

    <select name="id_loaisp" id="">
        <?php
             include("controller/cLoaisanpham.php");
             $p = new controllLoaisp();
         
             $loaisp = $p -> display_ten_loaisp();
         
         
             while($row = $loaisp -> fetch_assoc()){
                 echo '<option value="'. $row["id"] .'" name="id_sp">'. $row["tenloaisp"] .'</option>'; 
             }
        ?>

    </select> <br>

    <button type ="submit" name="themsp" value="thêm sp">thêm sp</button>
    <button type ="reset" name="huythemsp" value="huy thêm sp">hủy thêm sp</button>


</form>


<?php
    include_once("controller/cSanpham.php");
    $p = new controllSanpham();

    $id_sp = $_POST["id_loaisp"] ?? null;

    if(isset($_POST["themsp"])){
        if($p -> thucthi_themsp($_POST["tensp"], $_POST["giasp"], $id_sp)){
            echo "<script>alert('thêm sp thành công')</script>";
            
        }
    }


?> 