<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = array("Nam" => array("Ly"=>4, "Toan"=>5, "Hoa"=>6),
                        "Bich" => array("Ly"=>7, "Toan"=>4, "Hoa"=>8));
        $cars = array("Volvos", "BMW", "Toyota");
        $a = "TRUONG DHCN TP.HOCHIMINH";
        // echo strlen($a);
        // echo "<br>";

        // echo substr($a, 3,-8);
        // echo "<br>";
        // echo strlen(substr($a, -13,8));
        // echo "<br>";
        // echo substr($a, -13,-8);

        // echo "<br>";
        // foreach($cars as $x) {
        //     echo $x;
        // }
        // echo "<br>";

        // echo $student["Nam"]["Ly"];

        // echo "<br>";
        // $website = 'huuquang.com';
        // $domain = strstr($website,'.');
        // echo $domain;
        // // strpos

        function tong($a,$b, &$tong1) {
            $tong1 = $a+$b;
        }

        $a = 10; $b = 5;
        $tong = 0;
        $c = tong($a,$b, $tong);

        echo $c; //không có return không có cái để hứng

        function doublevalue($var = 5) {
            // global $temp;
            $temp = $var * 2;
        }

        $temp = 5;
        doublevalue();
        echo "\$temp is: $temp";

    ?>
</body>
</html>