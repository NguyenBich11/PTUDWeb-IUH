<!-- Bài 5. Nhập dữ liệu cho một listbox chứa danh sách năm từ 1900 đến năm hiện tại. (Hướng dẫn: Sử
dụng các thẻ sau: Thẻ tạo listbox: <select>, <option>, Tạo biến Date, hàm getYear(), vòng lặp
for.) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 05 extra</title>
</head>
<body>
    <label for="years">List years</label>
    <select name="years" id="years">
            <?php
                // $Date = date('Y');
                $currentDate = new DateTime();
                $currentYear = $currentDate->format('Y');

                for($i = 1900; $i <= $currentYear; $i++) {
                    echo '<option value="' .$i. '">'.$i.'</option>';
                }
            ?>
    </select>
</body>
</html>