<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MON - 0709</title>
</head>
<body>
    <!-- <img src="" alt=""> -->
     <nav></nav>
    <?php
        echo "<h2 style='color: red;'>Welcome Class \"PHP\"</h2>";
        echo "<hr>";
        $a=3;
        $b=5;
        echo $a==$b?"a=b":($a>$b?"a>b":"a&ltb"); //chú ý khi sử dụng dấu < hơn sử dụng &lt vì dùng dấu sẽ bị lỗi trùng mở thẻ

        switch($a) {
            case $a>$b:
                echo "A>B"; break;
            case $a<$b:
                echo "A&ltB"; break;  
            case $b:
                echo "A=B"; break; 
            default:
                echo "is not a comparision";break;
        }
    ?>
</body>
</html>