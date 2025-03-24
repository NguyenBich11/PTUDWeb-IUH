<h1>Trang upload ảnh</h1>
<form action="" name="formUpload" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" name="btnUpload" value="Up ảnh">
</form>

<?php 
    if(isset($_POST['btnUpload'])) {
        include("controller/cUpload.php");

        $p = new cUpload();
        $p->xuLy($_FILES['files']);
    }
?>