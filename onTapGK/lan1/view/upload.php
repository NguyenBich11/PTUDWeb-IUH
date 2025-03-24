<form action="#" name="formUpload" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" mutiple>
    <input type="submit" value="Upload file" name="btnUpload">
</form>

<?php 
    if(isset($_POST['btnUpload'])) {
        include("controller/cUpload.php");
        $p = new cUpload();
        $p->cXuly($_FILES['files']);
    }
?>