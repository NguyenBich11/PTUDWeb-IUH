<h2>Trang upload ảnh</h2>

<form action="" method="post" name="formUpload" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" name="btnUpload" value="Upload ảnh"> <br>

    <?php 
        $files = glob("hinhanh/*");

        foreach($files as $file) {
            $basename = basename($file);

            echo "<input type='checkbox' name='fileDelete[]' value='$basename'> $basename <br>";
        }
    ?>

    <input type="submit" name="btnDelete" value="Xóa file">
    <input type="submit" name="btnDeleteAll" value="Xóa tất cả file">
</form>

<?php 
    if(isset($_POST['btnUpload'])) {
        include_once("controller/cUpload.php");
        $p = new cUpload();
        $p->cXuLy($_FILES['files']);
    }

    if(isset($_POST['btnDelete'])) {
        include_once("controller/cUpload.php");
        $p = new cUpload();
        
        if(isset($_POST['fileDelete'])){
            $p->deleteFile($_POST['fileDelete'], "hinhanh/");
        }else{
            echo "Vui lòng chọn file";
        }
    }

    if(isset($_POST['btnDeleteAll'])){
        include_once("controller/cUpload.php");
        $p = new cUpload();

        $p->deleteFile(null, "hinhanh/");
    }
?>