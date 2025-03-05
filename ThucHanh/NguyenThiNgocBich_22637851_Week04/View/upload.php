<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="" name="formUpload" method="POST" enctype="multipart/form-data">
        <input type="file" name="txtFile">
        <input type="submit" name="btnSubmit" value="Upload file">
    </form>
</body>
</html>
<?php 
    if(isset($_POST['btnSubmit'])) {
        include("Controller/XuLy.php");

        $xuly = new XuLy;
        $xuly->upload($_FILES['txtFile']);
    }else {
        echo "Không có nút";    
    }
?>