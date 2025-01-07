<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 01 - Bài 03 - Nguyễn Thị Ngọc Bích</title>
</head>
<body>
    <?php
        include("classCalculator.php");
        $p = new ClassCalculator();
        $a = rand(0,100);
        $b = rand(0,100);
        echo "a = $a, b = $b";
        echo "<hr>";
        echo "a + b = ".$p->addition($a, $b)."<br>";
        echo "a - b = ".$p->subtraction($a, $b)."<br>";
        echo "a * b = ".$p->multiplication($a, $b)."<br>";
        echo "a / b = ".(!$p->division($a, $b)?"Không chia được":$p->division($a, $b))."<br>";
        echo "a % b = ".(!$p->mod($a, $b)?"Không chia được":$p->mod($a, $b))."<br>";
    ?>
</body>
</html>