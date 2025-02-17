<!-- Bài 6. Viết trang web xuất ra bảng cửu chường từ 2 đến 10. (Gợi ý: dùng table để thể hiện giao diện bảng) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 06 extra</title>
    <style>
        td {
            margin-right: 12px;
        }
    </style>
</head>
<body>
    <table style="width: 100%">
        <caption></caption>
        <tr>
            <?php
                for($i = 2; $i <= 10; $i++){
                    echo '<td>';
                    echo '<h5>Bảng cửu chương ' .$i. '</h5>';
                    for($j = 1; $j <= 10; $j++) {
                        echo 
                            $i . 'x' .$j. '='. $i*$j . '<br>';
                    }
                    echo '</td>';
                }
            ?>
        </tr>
    </table>
</body>
</html>