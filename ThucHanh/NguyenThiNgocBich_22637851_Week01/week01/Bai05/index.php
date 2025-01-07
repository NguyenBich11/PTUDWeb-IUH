<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 01 - Bài 05 - Nguyễn Thị Ngọc Bích</title>
    <style>
        table {
            width: 200px;
        }
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th col=2>i</th>
            <th col=2>Kết quả</th>
        </tr>
        <?php
            for($i=0; $i<=10; $i++) {
                echo "<tr style='text-align: center'> <td col=2>$i</td> <td>".(number_format(pow($i, $i+1), 0, "", ","))."</td> </tr>";
            }
        ?>
    </table>
</body>
</html>