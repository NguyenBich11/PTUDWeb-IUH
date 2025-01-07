<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 01 - Bài 04 - Nguyễn Thị Ngọc Bích</title>
</head>
<body>
    <?php
        for($i = 1; $i<=30; $i++) {
            echo "<span>".($i%2 == 0 ? "<b>$i</b>": "<i>$i</i>")." </span>";
        }
    ?>
</body>
</html>