<h2>THÊM SẢN PHẨM</h2>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="input-form">
        <label>Tên sản phẩm</label>
        <input type="text" name="tenSP" required>
    </div>
    <div class="input-form">
        <label>Giá gốc</label>
        <input type="text" name="originalPrice" required>
    </div>
    <div class="input-form">
        <label>Giá bán</label>
        <input type="text" name="sellingPrice" required>
    </div>
    <div class="input-form">
        <label>Hình ảnh</label>
        <input type="file" name="image" accept="image/*" required>
    </div>
    <div class="input-form">
        <label>Thương hiệu</label>
        <select name="brand" required>
            <?php 
                include("controller/cBrand.php");
                $cBrand = new cBrand();
                $allBrand = $cBrand->cGetAllBrand();

                if($allBrand && $allBrand->num_rows > 0)  {
                    while($row = $allBrand->fetch_assoc()) {
                        echo '
                            <option value="'.$row['MaTH'].'">
                                '.$row['TenTH'].'
                            </option>
                        ';
                    }
                }    
            ?>
        </select>
    </div>

    <div class="input-form">
        <input type="submit" name="btnSubmit" value="Thêm">
        <input type="reset" name="btnReset" value="Nhập lại">
        <input type="reset" name="btnBack" value="Quay lại">
    </div>

</form>

<?php
    if(isset($_POST['btnSubmit'])) {
        if(isset($_FILES['image']) && $_FILES['image']['error']==0) {
            include_once("controller/cUpload.php");
            $upload = new cUpload();

            $uploadImage = $upload->cUploadImage($_FILES['image']);

            if(!$uploadImage) {
                echo "<script>alert('Lỗi khi lưu ảnh')</script>";
                exit();
            }

            include("controller/cProduct.php");
            $p = new cProduct();
            $addP = $p->cAddProduct($_POST['tenSP'], $_POST['originalPrice'], $_POST['sellingPrice'], $uploadImage, $_POST['brand']);
            if($addP == true) {
                echo "<script>alert('Thêm sản phẩm thành công')</script>";
                header("refresh:0.1;url=index.php?act=admin");
                exit();
            }else {
                echo "<script>alert('Thêm sản phẩm không thành công')</script>";
                exit();
            }
            
        }
    }
?>