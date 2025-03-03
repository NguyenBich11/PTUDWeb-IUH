<?php
    include("Controller/XuLy.php");
                    
    $xuly = new XuLy;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        .rs {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <form action="" name="formUpload" method="POST" enctype="multipart/form-data">
        <input type="file" name="txtFile[]" multiple>
        <input type="submit" name="btnSubmit" value="Upload file">
    </form>
    <h2>Kết quả sau khi upload</h2>
    <div class="rs">
            <?php 
                if(isset($_POST['btnSubmit'])) {
                    $xuly->upload($_FILES['txtFile']);
                }else {
                    echo "Không có nút";    
                }
            ?>
    </div>
    <h2>Xóa file đã upload</h2>
    <form action="" name="formDelet" method="POST">
        <?php
            $xuly->deleteFile();
        ?>
        <input type="submit" name="btnDelete" value="Xóa file">
    </form>
    <?php
        if (isset($_POST['btnDelete']) && !empty($_POST['deleteFiles'])) {
            foreach ($_POST['deleteFiles'] as $filePath) {
                if (file_exists($filePath)) {
                    unlink($filePath);
                    echo "Đã xóa: " . basename($filePath) . "<br>";
                } else {
                    echo "File không tồn tại: " . basename($filePath) . "<br>";
                }
            }
        }
    ?>
</body>
</html>