<!-- Bài 3. Sử dụng ngôn ngữ PHP tạo ngẫu nhiên 02 số tự nhiên. Viết hàm tính BCNN($x,$y),
UCLN($x,$y). Xuất kết quả ra màn hình. -->
<?php
    include("classCal.php");

    $p = new ClassCal();
    $x = rand(0,100);
    $y = rand(0,100);

    $ucln = $p->ucln($x, $y);
    $bcnn = $p->bcnn($x, $y);
    echo "Ước chung lớn nhất của $x và $y là: $ucln"."<br>";
    echo "Bội chung nhỏ nhất của $x và $y là: $bcnn";
?>