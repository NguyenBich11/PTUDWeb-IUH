<!-- Bài 7. Viết chương trình cho phép đưa số ngẫu nhiên vào mảng có độ dài là n phần tử cho trước. Xây
dựng hàm thực hiện các yêu cầu sau:
a. Xuất mảng lên trang Web.
b. Đếm tổng số chẵn có trong mảng.
c. Tính tổng của các số lẻ trong mảng.
d. Xuất ra giá trị lớn nhất, nhỏ nhất của mảng.
e. Xuất đảo ngược các giá trị trong mảng -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 07 extra</title>
</head>
<body>
    <?php
        function randnum($n){
            $array = [];

            for($i = 0; $i < $n; $i++){
                $array[] = rand(1,100);
            }

            return $array;
        }

        function showArray($arr){
            echo 'List array: ';
            foreach($arr as $val){
                echo $val . ' ';
            }
            echo '<br>';
        }

        function evenNumCount($arr) {
            $count = 0;
            foreach($arr as $val) {
                if($val % 2 == 0) {
                    $count+=1;
                }
            }

            return $count;
        }

        function sumParityNum($arr){
            $sum = 0;
            foreach($arr as $val) {
                if($val % 2 != 0){
                    $sum += $val;
                }
            }

            return $sum;
        }

        $n = 10;
        $arr = randnum($n);
        $minNum = min($arr);
        $maxNum = max($arr);
        $arr_reverse = array_reverse($arr);

        showArray($arr);
        echo "Có ". evenNumCount($arr) . " số chẵn trong mảng";
        echo '<br>';
        echo "Tổng số lẻ trong mảng: " . sumParityNum($arr);
        echo '<br>';
        echo "Số nhỏ nhất trong mảng: " . $minNum;
        echo '<br>';
        echo "Số lớn nhất trong mảng: " . $maxNum;
        echo '<br>';
        echo "Xuất đảo ngược các giá trị trong mảng: ";
        showArray($arr_reverse);
    ?>
</body>
</html>