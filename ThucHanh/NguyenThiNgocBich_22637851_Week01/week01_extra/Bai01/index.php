<!-- Bài 1. Sử dụng ngôn ngữ PHP hiển thị một số tự nhiên x được phát sinh ngẫu nhiên; một số tự nhiên
$y được phát sinh ngẫu nhiên với 50<y<100. 
 -->
<?php
    $x = rand();
    $y = rand(50,100);

    echo "x: $x"."<br>";
    echo "y: $y";
?>