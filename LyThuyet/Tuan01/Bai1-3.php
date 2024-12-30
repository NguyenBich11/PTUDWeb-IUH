<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1.3</title>
</head>
<body>
    <?php
        $x = rand(0,100);
        $y = rand(0,100);

        $tong = $x + $y;
        $hieu = $x - $y;
        $nhan = $x * $y;
        $chia = $x / $y;
        $chiaDu = $x % $y;

        echo 'x: ' .$x;
        echo "<br>";
        echo 'y: ' . $y;
        echo "<br>";
        echo 'Kết quả tổng của x và y: ' . $tong;
        echo "<br>";
        echo 'Kết quả hiệu của x và y: ' . $hieu;
        echo "<br>";
        echo 'Kết quả nhân của x và y: ' . $nhan;
        echo "<br>";
        echo 'Kết quả chia của x và y: ' . $hieu;
        echo "<br>";
        echo 'Kết quả chia lấy dư của x và y: ' . $chiaDu;
    ?>
</body>
</html>