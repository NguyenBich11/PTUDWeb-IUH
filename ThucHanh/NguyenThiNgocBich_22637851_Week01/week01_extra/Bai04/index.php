<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 05 - Nguyễn Thị Ngọc Bích</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <table style="width: 500px">
        <tr>
            <th col=3>Số thứ tự</th>
            <th col=3>Tên sách</th>
            <th col=3>Nội dung</th>
        </tr>
        <?php
            for($i = 1; $i < 100; $i++) {
                echo "<tr>
                            <td>$i</td>
                            <td>Tên Sách $i</td>
                            <td>Nội dung $i</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>