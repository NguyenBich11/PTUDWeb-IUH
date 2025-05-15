<?php 
    include("controller/cProduct.php");
    $p = new cProduct();
?>
<h2>SỬA THÔNG TIN SẢN PHẨM</h2>

<form action="#" method="post" enctype="multipart/form-data">
    <?php 
        if(isset($_POST['idProduct'])) {
            $idProduct = $_POST['idProduct'];
            $tblProductByID = $p->cGetAllProductByID($idProduct); 

            if($tblProductByID && $tblProductByID->num_rows > 0) {
                while($row = $tblProductByID->fetch_assoc()) {
                    echo '
                    <input type="hidden" name="idProduct" value="'.$row['MaSP'].'">
                    <div class="input-form">
                        <label>Tên sản phẩm</label>
                        <input type="text" name="tenSP" value="'.$row['TenSP'].'">
                    </div>
                    <div class="input-form">
                        <label>Giá gốc</label>
                        <input type="text" name="originalPrice" value="'.$row['GiaGoc'].'">
                    </div>
                    <div class="input-form">
                        <label>Giá bán</label>
                        <input type="text" name="sellingPrice" value="'.$row['GiaBan'].'">
                    </div>
                    <div class="input-form">
                        <label>Hình ảnh</label>
                        <img src="'.$row['HinhAnh'].'"> <br>
                        <input type="file" name="image" value="'.$row['HinhAnh'].'">
                    </div>
                    <div class="input-form">
                        <label>Thương hiệu</label>
                        <input type="text" name="brand" value="'.$row['TenTH'].'">
                    </div>

                    <div class="input-form">
                        <input type="submit" name="btnSubmit" value="Lưu">
                        <input type="reset" name="btnReset" value="Nhập lại">
                        <input type="reset" name="btnBack" value="Quay lại">
                    </div>
                    ';
                }
            }
        }
        
    ?>
</form>

<?php 
    if(isset($_POST['btnSubmit'])) {
        $idProduct = $_POST['idProduct'];
        $tenSP = $_POST['tenSP'];
        $originalPrice = $_POST['originalPrice'];
        $sellingPrice = $_POST['sellingPrice'];
        $image = $_POST['image'];
        $brand = $_POST['brand'];

        $rsUpdate = $p->cUpdateProduct($idProduct, $tenSP, $originalPrice, $sellingPrice, $image);

        if($rsUpdate == true) {
            echo "<script>alert('Cập nhật thông tin thành công')</script>";
            header("refresh:0.1;url=index.php?act=admin");
            exit();
        }else {
            echo "<script>alert('Cập nhật thông tin không thành công')</script>";
            header("refresh:0.1;url=index.php?act=admin&func=updateProduct");
            exit();
        }
    }
?>