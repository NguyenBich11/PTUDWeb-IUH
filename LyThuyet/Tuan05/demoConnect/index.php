<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết nối với Database</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "admin";
        $pass = "123456";
        $db = "quanlytintuc";
        $conn = mysqli_connect($host, $user, $pass, $db);

        if($conn) {
            insertLoaiTin($conn);
            selectLoaiTin($conn);
            updateLoaiTin($conn);
            selectLoaiTin($conn);
            deleteLoaiTin($conn);
            selectLoaiTin($conn);
        }else {
            echo "<h1>Kết nối không thành công</h1>";
        }
        $conn->close();

        function selectLoaiTin($conn) {
            $selectSQL = "select IDLoaiTin, TenLoaiTin from loaitin";
            $resutl = $conn->query($selectSQL);

            if($resutl->num_rows > 0) {
                while($rows = $resutl->fetch_assoc()){
                    echo "<br>".$rows['TenLoaiTin'].$rows['IDLoaiTin']."<br>";
                }
            }else {
                echo "Không có dữ liệu";
            }
        }

        function insertLoaiTin($conn) {
            $insertSQL = "insert into loaitin(TenLoaiTin, TheLoai) values('Nghệ thuật', 5)";
            $resutl = $conn->query($insertSQL);
            if($resutl) {
                echo "Thêm dữ liệu vào bảng thành công";
            }else {
                echo "Thêm dữ liệu không thành công";
            }
        }

        function updateLoaiTin($conn) {
            $updateSQL = "update loaitin set TenLoaiTin = 'Báo chí' where TenLoaiTin = 'thể thao'";
            $resutl = $conn->query($updateSQL);
            if($resutl) {
                echo "Update thành công từ Tên loại tin: thể thao -> Báo chí";
            }else {
                echo "Không thể update";
            }
        }

        function deleteLoaiTin($conn) {
            $updateSQL = "delete from loaitin where TenLoaiTin = 'Nghệ thuật'";
            $resutl = $conn->query($updateSQL);
            if($resutl) {
                echo "Đã xóa thành công";
            }else {
                echo "Xóa không thành công";
            }
        }
    ?>
</body>
</html>