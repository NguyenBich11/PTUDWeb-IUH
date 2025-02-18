<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin</title>
</head>
<body>
    <h1>Thông tin chi tiết tác giả</h1>
    <?php
        $ten = $_GET['ten'];
        $tuoi = $_GET['tuoi'];
        
        switch($ten) {
            case 'An': echo 'Xin chào Nguyễn Văn An - ' .$tuoi . ' tuổi!'; break;
            case 'Tài': echo 'Xin chào Nguyễn Thành Tài - ' .$tuoi . ' tuổi!'; break;
            case 'Hải': echo 'Xin chào Phạm Thanh Hải - ' .$tuoi . ' tuổi!'; break;
            default: echo 'Không có tác giả.';
        }
    ?>
</body>
</html>