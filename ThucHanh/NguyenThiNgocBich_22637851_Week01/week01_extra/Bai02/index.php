<!-- Bài 2. Sử dụng ngôn ngữ PHP hiển thị hai số tự nhiên x, y được phát sinh ngẫu nhiên (x >y) -->
<?php
    $x = "";
    $y = "";
    do {
        $x = rand();
        $y = rand();
    }while($x < $y);

    echo "x: $x"."<br>";
    echo "y: $y";
?>