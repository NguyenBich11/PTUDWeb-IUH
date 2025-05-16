<?php 
    include("controller/cProduct.php");
    $p = new cProduct();
?>
<h2>SỬA THÔNG TIN SẢN PHẨM</h2>

<form action="#" method="post" enctype="multipart/form-data">
    <?php 
        if(isset($_POST['idProduct'])) {
            include("controller/cBrand.php");
            $cBrand = new cBrand();

            $idProduct = $_POST['idProduct'];
            $tblProductByID = $p->cGetAllProductByID($idProduct); 

            $allBrand = $cBrand->cGetAllBrand();

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
                        <input type="file" name="image" accept="image/*">
                        <input type="hidden" name="current_img" value="'.$row['HinhAnh'].'">
                    </div>
                    <div class="input-form">
                        <label>Thương hiệu</label>
                        <select name="brand">
                    ';
                    if($allBrand && $allBrand->num_rows > 0)  {
                        while($row = $allBrand->fetch_assoc()) {
                            echo '
                                <option value="'.$row['MaTH'].'">
                                    '.$row['TenTH'].'
                                </option>
                            ';
                        }
                    }    
                    
                    echo '   </select>
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
        include("controller/cUpload.php");
        $upload = new cUpload();

        $idProduct = $_POST['idProduct'];
        $tenSP = $_POST['tenSP'];
        $originalPrice = $_POST['originalPrice'];
        $sellingPrice = $_POST['sellingPrice'];
        $brand = $_POST['brand'];

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = $upload->cUploadImage($_FILES['image']);

            if(!$image) {
                echo "<script>alert('Lỗi khi upload ảnh')</script>";
                exit();
            }
        }else {
            $image = $_POST['current_img'];
        }

        $rsUpdate = $p->cUpdateProduct($idProduct, $tenSP, $originalPrice, $sellingPrice, $image, $brand);

        if($rsUpdate == true) {
            echo "<script>alert('Cập nhật thông tin thành công')</script>";
            header("refresh:0.1;url=index.php?act=admin");
            exit();
        }else {
            echo "<script>alert('Cập nhật thông tin không thành công')</script>";
            // header("refresh:0.1;url=index.php?act=admin");
            exit();
        }
    }
?>